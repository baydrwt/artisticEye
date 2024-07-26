@extends('dashboard.layouts.main')

<style></style>

@section('content')

<div class="col-lg-11 mx-auto my-auto" style="overflow-x:hidden">
    <h2 class="mt-2" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Share Your Experience</h2>
    <form action="/dashboard/reviews" method="post" class="mb-4 col-lg-12" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">        
            <div class="rating-box">
                <h3 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">How was your experience?</h3>
                <div class="stars">
                    <input type="radio" name="rate" id="star1" value="1">
                    <label for="star1"><i class="fa-solid fa-star"></i></label>
            
                    <input type="radio" name="rate" id="star2" value="2">
                    <label for="star2"><i class="fa-solid fa-star"></i></label>
            
                    <input type="radio" name="rate" id="star3" value="3">
                    <label for="star3"><i class="fa-solid fa-star"></i></label>
            
                    <input type="radio" name="rate" id="star4" value="4">
                    <label for="star4"><i class="fa-solid fa-star"></i></label>
            
                    <input type="radio" name="rate" id="star5" value="5">
                    <label for="star5"><i class="fa-solid fa-star"></i></label>
                </div>
            </div>            
        </div>
        <div class="mb-3">
            @error('desc')
                   <p class="text-danger">{{ $message }}</p> 
             @enderror
            <label for="review" class="form-label">Review</label>
            <input id="review" type="hidden" name="review" value="{{ old('review') }}">
            <trix-editor input="review"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mt-3 float-end">Create Review</button>
    </form>
</div>

<script>
const stars = document.querySelectorAll('.rating-box .fa-star');
stars.forEach((star, index1) => {
  star.addEventListener('click', () => {
    stars.forEach((star, index2) => {
      index1 >= index2
        ? star.classList.add('active')
        : star.classList.remove('active');
    });
  });
});
</script>
@endsection