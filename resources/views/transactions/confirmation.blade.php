@extends('layouts.main')

@section('content')
    @if ($latestBooking && $productDetails)
    <div class="box-confirmation bg-dark p-1 mt-5 mx-auto">
        <h3 class="text-center text-light mt-3 pb-3">Confirmation Payment</h3>
            <div class="container p-5 text-center">
                <div class="row">
                    <div class="col-md-6 text-start"><h5>Transaction ID </h5></div>
                    <div class="col-md-6 text-end"><h5>{{ $latestBooking->transaction_id }}</h5></div>
                    <input type="hidden" value="{{ $latestBooking->transaction_id }}" name="transaction_id">
                </div>
                <div class="row">
                    <div class="col-md-6 text-start"><h5>Name </h5></div>
                    <div class="col-md-6 text-end"><h5>{{ $latestBooking->name }}</h5></div>
                    <input type="hidden" value="{{ $latestBooking->name }}" name="name">
                </div>
                <div class="row">
                    <div class="col-md-6 text-start"><h5>No Phone </h5></div>
                    <div class="col-md-6 text-end"><h5>{{ $latestBooking->telp }}</h5></div>
                    <input type="hidden" value="{{ $latestBooking->telp }}" name="telp">
                </div>
                <div class="row">
                    <div class="col-md-6 text-start"><h5>Package </h5></div>
                    <div class="col-md-6 text-end"><h5>{{ $latestBooking->product }}</h5></div>
                    <input type="hidden" value="{{ $productDetails->id }}" name="product_id">
                    <input type="hidden" value="{{ $latestBooking->product }}" name="product">
                    <input type="hidden" value="{{ $productDetails->price }}" name="price">
                </div>
                <div class="row">
                    <div class="col-md-6 text-start"><h5>Date </h5></div>
                    <div class="col-md-6 text-end"><h5>{{ \Carbon\Carbon::parse($latestBooking->date_book)->format('l, d F Y') }}</h5></div>
                    <input type="hidden" value="{{ \Carbon\Carbon::parse($latestBooking->date_book)->format('l, d F Y') }}" name="date_book">
                </div>
                <div class="row price mt-3 pt-2 pb-2">
                    <div class="col-md-6 text-start"><h5>Total Price </h5></div>
                    <div class="col-md-6 text-end"><h5>{{ number_format($latestBooking->total_price, 0, ',', '.') }} IDR</h5></div>
                    <input type="hidden" value="{{ $latestBooking->total_price }}" name="total_price">
                </div>
                @else
                    <p class="text-danger"> No booking found.</p>
                @endif
            </div>
        </div>
        <div class="btn btn-primary rounded-3 mt-4 me-5" style="position: absolute;right:0px" >
            <button type="button" id="pay-button" class="btn text-light" style="text-decoration: none">Pay</button>
        </div>
@endsection
<script type="text/javascript" src="https://app.stg.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script type="text/javascript">
 document.addEventListener('DOMContentLoaded', function() {
    function updateBookingStatus(newStatus) {
        fetch('/update-booking-status', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' 
                },
                body: JSON.stringify({
                    bookingId: '{{ $latestBooking->transaction_id }}',
                    newStatus: newStatus
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Booking status updated successfully:', data.message);
            })
            .catch(error => {
                console.error('Failed to update booking status:', error);
            });
        };
        
        document.getElementById('pay-button').onclick = function(){
                snap.pay('{{ $latestBooking->snap_token }}', {
                    onSuccess: function(result){
                        updateBookingStatus('success');
                        window.location.href = '/';
                    },
                    onPending: function(result){
                        updateBookingStatus('pending');
                        window.location.href = '/';
                    },
                    onError: function(result){
                        updateBookingStatus('error');
                        window.location.href = '/';
                    }
                });
            };
    });
</script>
