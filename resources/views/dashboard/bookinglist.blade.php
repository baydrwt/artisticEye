@extends('dashboard.layouts.main')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show col-lg-8 mt-3 ms-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="container list-booking">
        <h2 class="mt-3 fw-bolder">List Booking artisticEye</h2>
        <div class="card-body mt-5">
            <table class="table table-striped" id="data-table">
                <thead>
                    <tr>
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
                        <th data-column="delete">Delete</th>
                    </tr>
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
                                    @if($transaction->img_payment_proof == null)
                                        <p class="mb-0">Haven't Uploaded The Payment</p>
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
                                <form action="{{ route('approve.by.admin', ['transaction' => $transaction->transaction_id]) }}" method="POST" >
                                    @method('put')
                                    @csrf
                                    <div class="box-approve d-flex flex-column gap-2">
                                        <button class="btn btn-success btn-accept btn-data"  name="status" value="success">Approve</button>
                                        <button class="btn btn-danger btn-reject btn-data" name="status" type="submit" value="rejected">Reject</button>
                                    </div>
                                </form>   
                            </td>
                            <td>
                                <form action="{{ route('destroy', ['transaction' => $transaction->transaction_id]) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                    <i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection