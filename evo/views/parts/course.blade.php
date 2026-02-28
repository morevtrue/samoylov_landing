<section class="container-fluid pt-5 pb-5" id="course">
  <h4 class="title-section mb-5 text-center course-title">Особенности курса</h4>
  <div class="container-sm justify-content-center align-items-center pt-5">
    <div class="course-container">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
                @foreach ($peculiarityes as $peculiarity)
                    @include('parts.course_item_swiper')
                @endforeach
            </div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        @foreach ($peculiarityes as $peculiarity)
            @include('parts.course_item')
        @endforeach
    </div>
  </div>
</section>
