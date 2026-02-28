<section class="container-fluid pt-5 pb-5 video" id="video">
    <h4 class="title-section mb-5 text-center video-title">
        {{ $video[21]['video_title'] }}
    </h4>
    <p class="text-paragraph">
        {!! $video[21]['video_text'] !!}
    </p>
    <div class="video-container">
        <iframe src="{{ $video[21]['video_link'] }}" loading="lazy" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>
    </div>
</section>
