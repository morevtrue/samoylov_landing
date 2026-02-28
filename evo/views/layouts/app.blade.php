<!doctype html>
<html lang="ru">
  <head>
    <base href="{{ $modx->getConfig('site_url') }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        name="description"
        content="{{ $documentObject['metadescription'] ? $documentObject['metadescription'] : $documentObject['introtext'] }}"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="template/css/styles.css">
    <link type="image/x-icon" href="template/img/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="template/img/favicon.ico" rel="icon">
    <title>
        {{ $documentObject['metatitle'] ? $documentObject['metatitle'] : $documentObject['pagetitle'] }}
    </title>
    {!! $modx->getConfig('client_header_codes') !!}
  </head>
  <body>
    <main class="flex-shrink-0">
      @yield('content')
    </main>
    <div class="cookie">
        <span class="cookie__text">Мы используем файлы cookie для улучшения сайта. Вы можете прочитать об этом <a href="{{ $modx->getConfig('site_url') }}politika-obrabotki-personalnyh-dannyh" class="cookie__link" target="_blank">здесь.</a></span>
        <button class="cookie__button">Принять и закрыть</button>
    </div>
    <script>
        function getCookie() {
            return document.cookie.split('; ').reduce((acc, item) => {
                const [name, value] = item.split('=');
                acc[name] = value;
                return acc;
            }, {})
        }

        const cookie = getCookie();
        const button_cookie = document.querySelector('.cookie__button');
        const cookie_container = document.querySelector('.cookie');

        if (!cookie.accept_cookie) {
            cookie_container.classList.add('active');
            button_cookie.addEventListener('click', () => {
                cookie_container.classList.remove('active');
                document.cookie = 'accept_cookie=true;secure;samesite=strict;max-age=86400'
            })
        }
    </script>
  </body>
</html>
