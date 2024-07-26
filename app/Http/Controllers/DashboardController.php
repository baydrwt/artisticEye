<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(Transaction $transaction){
        $user_id = Auth::id();
        $transaction = Transaction::where('user_id', $user_id)->get();
        $latestBooking = Transaction::where('user_id', $user_id)
                ->latest('created_at')
                ->first();

        return view('dashboard.dashboard',[
           'transactions' => $transaction,
           'latestBooking' => $latestBooking
        ]);
    }
}
