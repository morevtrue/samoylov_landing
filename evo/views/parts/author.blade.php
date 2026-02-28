<section class="container-fluid blue pt-5 pb-5" id="author">
  <div class="container-sm justify-content-center align-items-center author">
    <div class="row align-items-center mobile">
      <div class="col order-two">
        <h3 class="mb-5 title-section">{{ $author[3]['author_title'] }}</h3>
        <p class="text-paragraph">
          {!! $author[3]['author_text'] !!}
        </p>
        <a href="#feedback" class="btn btn-primary mt-5 ps-5 pe-5 btn-mobile">Узнать подробнее</a>
      </div>
      <div class="col img-mobile order-one">
        <img class="img-fluid img float-end" src="{{ $author[3]['author_photo'] }}" alt="титульное фото Дениса Самойлова">
      </div>
    </div>
  </div>
</section>
