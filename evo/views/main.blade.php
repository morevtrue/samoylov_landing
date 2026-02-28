@extends('layouts.app')

@section('content')
@include('parts.nav')
<section class="container-fluid blue pt-5 pb-5" id="up">
  <div class="container-sm justify-content-center align-items-center name-course">
    <div class="row align-items-center mobile">
      <div class="col order-two">
        <p class="text-paragraph">{{ $documentObject['pagetitle'] }}</p>
        <h1 class="title-section">{!! $documentObject['content'] !!}</h1>
        <a href="#show-more" class="btn btn-primary mt-5 ps-5 pe-5 btn-mobile">Узнать больше</a>
      </div>
      <div class="col img-mobile order-one">
        <img class="img-fluid img float-end" src="{{ $documentObject['main_photo'] }}" alt="титульное фото Дениса Самойлова">
      </div>
    </div>
  </div>
</section>
@include('parts.introduction')
@include('parts.author')
@include('parts.course')
@include('parts.programm')
@include('parts.review')
<section class="container-fluid pt-5 pb-5 feedback blue" id="feedback">
  <div class="form-wrapper" style="background-color:#fff;">
    <img class="form-photo" src="{{ $feedback[6]['feedback_photo'] }}" alt="фотография в форме обратной связи"></img>
    {!! $contact_form !!}
  </div>
</section>
@include('parts.video')
@include('parts.footer')
@include('parts.footer_scripts')
@endsection
