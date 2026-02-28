<section class="container-fluid blue pt-5 pb-5 programm-container" id="programm">
  <h4 class="title-section mb-5 text-center">Программа курса</h4>
  <ol class="list programm-list">
    @foreach ($programm as $programm_item)
      @include('parts.programm_item')
    @endforeach
  </ol>
</section>