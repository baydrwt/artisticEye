<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Review $review)
    {
        $user_id = Auth::id();
        $name = Auth::user()->name;
        $reviews = Review::where('user_id', $user_id)->get();
        $transaction = Transaction::where('user_id', $user_id)->get();
        $products = $transaction->pluck('product');

        if ($products->isNotEmpty()) {
            $product = $products[0];
        } else {
            $product = null;
        }
        
        return view('dashboard.reviews.index',[
            'reviews' => $reviews, 
            'product' => $product,
            'name' => $name,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user_id = Auth::id();
        $transaction = Transaction::where('user_id', $user_id)->get();
        return view('dashboard.reviews.create', [
            'reviews' => Review::all(),
            'product' => $transaction
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rate' => 'required',
            'review' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['name'] = auth()->user()->name;
        $validatedData['review'] = strip_tags($request->review);
        
        Review::create($validatedData);

        return redirect('/dashboard/reviews')->with('success', 'New review has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('dashboard.reviews.edit',[
            'review' => $review,
            'reviews' => Review::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {   
        $validatedData = $request->validate([
            'rate' => 'required',
            'review' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['review'] = strip_tags($request->review);
        
        Review::where('id', $review->id)
        ->update($validatedData);

        return redirect('/dashboard/reviews')->with('success', 'Review has been modified!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        Review::destroy($review->id);

        return redirect('/dashboard/reviews')->with('success', 'Review has been deleted!');
    }
}
