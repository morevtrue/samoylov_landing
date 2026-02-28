<section class="container-fluid pt-5 pb-5" id="review">
  <h4 class="title-section mb-5 text-center course-title">Отзывы о курсе</h4>
  <div class="container-sm justify-content-center align-items-center pt-5">
    <div class="course-container">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
                @foreach ($reviews as $review)
                    @include('parts.review_item_swiper')
                @endforeach
            </div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        @foreach ($reviews as $review)
            @include('parts.review_item')
        @endforeach
    </div>
  </div>
</section>
