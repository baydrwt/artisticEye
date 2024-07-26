@extends('dashboard.layouts.main')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8 mt-3 ms-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom container">
    <div class="container list-booking">
        <h2 class="mt-3 fw-bolder">History</h2>
        <div class="card-body mt-5">
            <table class="table table-striped" id="data-table">
                <thead>
                    <th data-column="no">No</th>
                    <th data-column="transaction_id">Transaction Id</th>
                    <th data-column="name">Name</th>
                    <th data-column="telp">Telp</th>
                    <th data-column="product">Product</th>
                    <th data-column="total_price">Total Price</th>
                    <th data-column="created_at">Insert Date</th>
                    <th data-column="date_book">Date Book</th>
                    <th data-column="payment">Payment</th>
                    <th data-column="status">Status</th>
                    <th data-column="action">Action</th>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $transaction->transaction_id }}</td>
                            <td>{{ $transaction->name }}</td>
                            <td>{{ $transaction->telp }}</td>
                            <td>{{ $transaction->product }}</td>
                            <td>{{ $transaction->total_price }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaction->date_book)->format('d/m/Y') }}</td>
                            <td>
                                @if($transaction->status == 'success' && $transaction->img_payment_proof == null)
                                    {{ $transaction->status }}
                                @else
                                    @if($transaction->img_payment_proof == null && $transaction->status !== 'success')
                                        <p class="mb-0">Need To Upload Payment</p>
                                    @else
                                        <a href="{{ asset('storage/' . $transaction->img_payment_proof ) }}" data-lightbox="transaction-images">
                                            <img src="{{ asset('storage/' . $transaction->img_payment_proof ) }}" class="table-image" width="100" height="100" alt="">
                                        </a>
                                    @endif
                                @endif
                            </td>
                            <td>
                                <p class="status d-none">{{ $transaction->status }}</p>
                                <i class="fa-solid fa-circle-check fa-2x" style="color: #00ff11;"></i>
                                <i class="fa-solid fa-circle-xmark fa-2x" style="color: #d10000;"></i>
                                <i class="fa-solid fa-clock fa-2x" style="color: #f3f708;"></i>
                            </td>
                            <td>
                                @if ($transaction->status == 'success')
                                    <button class="btn bg-success pt-2 pb-2" style="border: none" disabled>
                                        <a href="form-book/confirmation/payment-{{ $latestBooking->transaction_id }}" class="text-white fw-bolder" style="text-decoration: none;font-size:14px">Payment Approved</a>
                                    </button>
                                @else
                                    @if($transaction->img_payment_proof == null)
                                        <button class="btn bg-primary pt-2 pb-2" style="border: none">
                                            <a href="form-book/confirmation/payment-{{ $latestBooking->transaction_id }}" class="text-white fw-bolder" style="text-decoration: none;font-size:14px">Upload Payment</a>
                                        </button>
                                    @else
                                        <button class="btn bg-primary pt-2 pb-2" style="border: none">
                                            <a href="form-book/confirmation/payment-{{ $latestBooking->transaction_id }}" class="text-white fw-bolder" style="text-decoration: none;font-size:14px">Reupload Payment</a>
                                        </button>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection