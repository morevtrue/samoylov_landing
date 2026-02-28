<div class="swiper-slide">
    <img src="{{ $review['review_photo'] }}" alt="{{ $review['review_item_title'] }}" class="img-fluid mb-4 img-card img-review" style="width:200px;border-radius:20px;height:200px;">
    <p class="text-paragraph text-center">
        {{ $review['review_item_title'] }}
    </p>
    <p class="text-signature text-center w-75 mx-auto">
        {!! $review['review_text'] !!}
    </p>
</div>
