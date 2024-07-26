@extends('layouts.main')

@section('content')
<div class="col-lg-8 mx-auto mt-5">
    <h3 class="text-center mt-3 text-light mb-3">Booking Form</h3>
    <form action="/form-book" method="POST" class="mb-4" enctype="multipart/form-data" style="position: relative">
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', auth()->user()->name) }}">
                @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">No Telephone</label>
                <input type="tel" name="telp" class="form-control @error('telp') is-invalid @enderror" id="telp" placeholder="Number Phone" pattern="^(\+62|62|0)8[1-9][0-9]{6,9}$" required value="{{ old('telp', auth()->user()->telp) }}">
                @error('telp')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>  
            <div class="mb-3">
                <label for="date_book" class="form-label">Date</label>
                <input type="date" class="form-control @error('date_book') is-invalid @enderror" id="date_book" name="date_book" required autofocus value="{{ old('date_book') }}">
                @error('date_book')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Package Product</label>
                <select class="form-select @error('product') is-invalid @enderror" id="product" name="product" required autofocus value="{{ old('product') }}">
                    <option disabled selected style="color:black">Choose your Package</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" style="color: grey">{{ $product->name }}</option>
                    @endforeach
                </select>
                @error('product')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
            </div>
          <button type="submit" class="btn btn-primary mt-3" style="position: absolute;right:0">Book Now</button>
    </form>
</div>
@endsection