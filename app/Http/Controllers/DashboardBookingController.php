<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;


class DashboardBookingController extends Controller
{
    public function index(Transaction $transaction){
        return view('dashboard.bookinglist',[
            'transaction' => $transaction,
            'transactions' => Transaction::all()
        ]);
    }

    public function updateStatus(Request $request, Transaction $transaction){
        $transaction = Transaction::find($transaction->id);
        
        $action = $request->input('status');

        if ($action === 'success') {
            $transaction->status = 'success';
        
        } elseif ($action === 'rejected') {
            $transaction->status = 'rejected';
        }

        $transaction->save();

        return redirect('/dashboard/booking-list')->with('success', 'Status Updated');

    }

        public function destroy(Transaction $transaction)
        {
            $transaction = Transaction::find($transaction->id);
            $transaction->delete();

            return redirect('/dashboard/booking-list')->with('success', 'Transaction has been deleted!');
        }

}
