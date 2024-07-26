<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if ($request->has('id')) {
            // Jika ada, ambil nilai parameter 'id'
            $transactionId = $request->input('id');
            
            // Cek status transaksi berdasarkan ID atau parameter lainnya dalam request
            $transaction = Transaction::findOrFail($transactionId);
    
            // Jika status bukan 'success', abort dengan pesan kesalahan 403
            if ($transaction->status !== 'success') {
                abort(403, 'Transaction is not approved.');
            }
        }

        return $next($request);
    }
}
