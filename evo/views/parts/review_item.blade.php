<div class="col text-center w-75 item-about course-item">
  <img src="{{ $review['review_photo'] }}" alt="{{ $review['review_item_title'] }}" class="img-fluid mb-4 img-course img-review" >
  <p class="text-paragraph text-center">{{ $review['review_item_title'] }}</p>
  <p class="text-signature text-center w-75 mx-auto">
    {!! $review['review_text'] !!}
  </p>
</div>
