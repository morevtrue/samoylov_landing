<section class="container-fluid pt-5 pb-5" id="show-more">
  <div class="container-sm justify-content-center align-items-center show-more">
    <div class="row align-items-center mobile">
      <div class="col img-mobile">
        <img class="img-fluid img float-start img-white-back" src="{{ $introduction[2]['introduction_photo'] }}" alt="титульное фото Дениса Самойлова">
      </div>
      <div class="col">
        <h2 class="mb-5 title-section">{{ $introduction[2]['introduction_title'] }}</h2>
        <p class="text-paragraph">
          {!! $introduction[2]['introduction_paragraph_first'] !!}
        </p>
        <p class="text-paragraph">
          {!! $introduction[2]['introduction_paragraph_second'] !!}
        </p>
        <a href="#feedback" class="btn btn-primary mt-5 ps-5 pe-5 btn-mobile">Хочу присоединиться</a>
      </div>
    </div>
  </div>
</section>
