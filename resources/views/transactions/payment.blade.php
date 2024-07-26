@extends('layouts.main')

@section('content')
    <div class="container" style="position: relative">
        <h3 class="text-center text-light mt-5">Upload Payment</h3>
        <ul><h5 class="mt-5"><span class="text-danger fw-bolder">Careful! </span> Payment We Only Receive</h5>
            <li>BNI A.N BAYU DARWANTO No Rek : 0419669091</li>
            <li>BRI A.N BAYU DARWANTO No Rek : 736801011908509</li>
            <li>Digital Wallet A.N BAYU DARWANTO : 081908271385 (DANA/GoPay/OVO)</li>
        </ul>
        <form action="{{ route('upload.payment.proof', ['transaction' => $transaction->transaction_id]) }}" method="post" class="mb-4" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <img class="img-preview img-fluid col-sm-5 mb-3">
                <input class="form-control @error('img_payment_proof') is-invalid @enderror" id="img_payment_proof" type="file" accept="image/*" id="img_payment_proof" name="img_payment_proof" onchange="previewImage()">
                @error('img_payment_proof')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3 me-2" style="position: absolute;right:0">Upload</button>
        </form>
    </div>
    <script>
         function previewImage(){
        const image = document.querySelector('#img_payment_proof');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }}
    </script>
@endsection