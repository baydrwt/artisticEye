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
        <h2 class="mt-3 fw-bolder">Hello, {{ auth()->user()->name }}</h2>
        @if($reviews->isEmpty())
            <a href="/dashboard/reviews/create" class="btn btn-primary mb-2 mt-2">Create New Review</a>
        @else
            <button disabled class="btn btn-primary mb-2 mt-2">Create New Review</button>
        @endif
        <div class="card-body mt-5">
            <table class="table table-striped" id="data-table">
                <thead>
                    <th data-column="no">Nama</th>
                    <th data-column="transaction_id">Product</th>
                    <th data-column="rate">Rate</th>
                    <th data-column="review">Review</th>
                    <th data-column="action">Action</th>
                </thead>
                <tbody>
                    @foreach ($reviews as $review)
                        <tr>
                            <td>{{ $name }}</td>
                            <td>{{ $product }}</td>
                            <td>   
                                <div class="stars">
                                    <input disabled type="radio" name="rate" id="star1" value="1" {{ old('rate', $review->rate) == '1' ? 'checked' : '' }}>
                                    <label for="star1"><i class="fa-solid fa-star mx-1"></i></label>
                            
                                    <input disabled type="radio" name="rate" id="star2" value="2" {{ old('rate', $review->rate) == '2' ? 'checked' : '' }}>
                                    <label for="star2"><i class="fa-solid fa-star mx-1"></i></label>
                            
                                    <input disabled type="radio" name="rate" id="star3" value="3" {{ old('rate', $review->rate) == '3' ? 'checked' : '' }}>
                                    <label for="star3"><i class="fa-solid fa-star mx-1"></i></label>
                            
                                    <input disabled type="radio" name="rate" id="star4" value="4" {{ old('rate', $review->rate) == '4' ? 'checked' : '' }}>
                                    <label for="star4"><i class="fa-solid fa-star mx-1"></i></label>
                            
                                    <input disabled type="radio" name="rate" id="star5" value="5" {{ old('rate', $review->rate) == '5' ? 'checked' : '' }}>
                                    <label for="star5"><i class="fa-solid fa-star mx-1"></i></label>
                                </div>
                            </td>
                            <td>{{ $review->review }}</td>
                            <td>
                                <a href="/dashboard/reviews/{{ $review->user_id }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('reviews.destroy', $review) }}" method="post" class="d-inline">
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
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
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