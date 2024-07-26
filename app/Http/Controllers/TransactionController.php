<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\User;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use PHPUnit\Event\Tracer\Tracer;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transactions.form',[
            'title' => 'Form Booking',
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transactions.form',[
            'title' => 'Form Booking',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Transaction $transaction)
    {
        $messages = [
            'date_book.after_or_equal' => 'Tanggal booking harus setelah atau sama dengan tanggal hari ini.',
            'date_book.unique' => 'Tanggal booking sudah terjadwal sebelumnya.',
        ];

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'telp' => 'required',
            'date_book' => [
                'required',
                'date',
                'after_or_equal:' . Carbon::today()->format('Y-m-d'),
                Rule::unique('transactions', 'date_book')->where(function ($query) use ($request) {
                    return $query->where('user_id', auth()->id())
                                 ->where('date_book', $request->input('date_book'));
                }),
                function ($attribute, $value, $fail) {
                    $existingCount = Transaction::where('date_book', $value)
                                            ->count();
        
                    if ($existingCount >= 2) {
                        $fail('Jumlah booking pada tanggal ini sudah mencapai batas maksimal.');
                    }
                },
            ],
            'product' => 'required',
        ], $messages);

        $selectedProductId = $request->input('product');

        $product = Product::find($selectedProductId);
        $productPrice = $product->price;
        $productName = $product->name;
        $productId = $product->id;

        $telp = auth()->user()->telp;
        $name = auth()->user()->name;
        $email = auth()->user()->email;

        Config::$serverKey = 'SB-Mid-server-i28R0RpxV-D0sX162RhxKf2B';

        Config::$isProduction = false;

        Config::$isSanitized = true;

        Config::$is3ds = true;

            $params = [
                'transaction_details' => [
                    'order_id' => "AE" . $request->product . auth()->user()->id . Str::upper(Str::random(7)),
                    'gross_amount' => $productPrice,
                ],
                'customer_details' => [
                    'first_name' => $name,
                    'phone' => $telp,
                    'email' => $email,
                ],
                'item_details' => [
                    [
                        'id' => $productId,
                        'name' => $productName,
                        'quantity' => 1,
                        'price' => $productPrice
                    ],
                ],
                
            ];

            $snapToken = \Midtrans\Snap::getSnapToken($params);

            $validatedData['user_id'] = auth()->user()->id ;
            $validatedData['transaction_id'] = "AE" . $request->product . auth()->user()->id . Str::upper(Str::random(7));
            $validatedData['product'] = $productName;
            $validatedData['total_price'] = $productPrice;
            $validatedData['status'] = 'pending';
            $validatedData['snap_token'] = $snapToken;

        Transaction::create($validatedData);

        return redirect('/form-book/confirmation');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {  
      
        $user_id = Auth::id();
        $latestBooking = Transaction::where('user_id', $user_id)
                ->latest('created_at')
                ->first();
                
        $productDetails = Product::where('name', $latestBooking->product)
                ->first();
        return view('transactions.confirmation',[
            'title' => 'Confirmation Payment',
            'latestBooking' => $latestBooking,
            'productDetails' => $productDetails
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        $user_id = Auth::id();
        $latestBooking = Transaction::where('user_id', $user_id)
                ->latest('created_at')
                ->first();

        return view('transactions.payment', [
            'title' => 'Upload Payment',
            'transactions' => $transaction,
            'transaction' => $latestBooking
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {

            $request->validate([
            'img_payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $imagePath = $request->file('img_payment_proof')->store('transaction-images');
    
            $transaction->update([
                'img_payment_proof' => $imagePath,
                'status' => 'pending'
            ]);

            return redirect()->route('dashboard')->with('success', 'The payment has been successfully uploaded. Wait, until the admin will verify your payment.');
    }

    public function updateStatus(Request $request)
    {
        $bookingId = $request->input('bookingId');
        $newStatus = $request->input('newStatus');

        $booking = Transaction::where('transaction_id', $bookingId)->get()->first();
        if ($booking) {
            $booking->status = $newStatus;
            $booking->save();

            return response()->json(['message' => 'Booking status updated successfully']);
        } else {
            return response()->json(['error' => 'Booking not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
       //
    }
}
