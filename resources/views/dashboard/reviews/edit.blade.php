@extends('dashboard.layouts.main')

@section('content')

<div class="col-lg-11 mx-auto my-auto" style="overflow-x:hidden">
    <h2 class="mt-2" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Revise Your Review</h2>
    <form action="/dashboard/reviews/{{ $review->id }}" method="post" class="mb-4 col-lg-12" enctype="multipart/form-data">'
        @method('put')
        @csrf
        <div class="mb-3">        
            <div class="rating-box">
                <h3 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">How was your experience?</h3>
                <div class="stars">
                    <input type="radio" name="rate" id="star1" value="1" {{ old('rate', $review->rate) == '1' ? 'checked' : '' }}>
                    <label for="star1"><i class="fa-solid fa-star"></i></label>
                    @error('rate')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            
                    <input type="radio" name="rate" id="star2" value="2" {{ old('rate', $review->rate) == '2' ? 'checked' : '' }}>
                    <label for="star2"><i class="fa-solid fa-star"></i></label>
                    @error('rate')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            
                    <input type="radio" name="rate" id="star3" value="3" {{ old('rate', $review->rate) == '3' ? 'checked' : '' }}>
                    <label for="star3"><i class="fa-solid fa-star"></i></label>
                    @error('rate')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            
                    <input type="radio" name="rate" id="star4" value="4" {{ old('rate', $review->rate) == '4' ? 'checked' : '' }}>
                    <label for="star4"><i class="fa-solid fa-star"></i></label>
                    @error('rate')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            
                    <input type="radio" name="rate" id="star5" value="5" {{ old('rate', $review->rate) == '5' ? 'checked' : '' }}>
                    <label for="star5"><i class="fa-solid fa-star"></i></label>
                    @error('rate')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>            
        </div>
        <div class="mb-3">
            @error('review')
                   <p class="text-danger">{{ $message }}</p> 
             @enderror
            <label for="review" class="form-label">Review</label>
            <input id="review" type="hidden" name="review" value="{{ old('review', $review->review) }}">
            <trix-editor input="review"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mt-3 float-end">Edit Review</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

$(document).ready(function() {
    $("input[type='radio']:checked").each(function() {
        let selectedValue = $(this).val();
        
        $("input[type='radio']").each(function() {
            const starValue = $(this).val();
            const starIcon = $(this).next("label").find("i.fa-solid");
            
            if (starValue <= selectedValue) {
                starIcon.addClass("active");
            } else {
                starIcon.removeClass("active");
            }
        });
    });

    $("input[type='radio']").change(function() {
       let selectedValue = $(this).val();
        
        $("i.fa-solid").removeClass("active");
        
        $("input[type='radio']").each(function() {
            const starValue = $(this).val();
            const starIcon = $(this).next("label").find("i.fa-solid");
            
            if (starValue <= selectedValue) {
                starIcon.addClass("active");
            }
        });
    });
});
</script>
@endsection