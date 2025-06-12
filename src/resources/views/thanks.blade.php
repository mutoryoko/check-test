<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Noto+Serif+JP&display=swap" rel="stylesheet">
  </head>
  <body>
    <main class="thanks__content">
        <div class="thanks__content--inner">
          <h2 class="thanks__heading">お問い合わせありがとうございました</h2>
          <div class="home__button">
            <a href="{{ route('contact.index') }}" class="home__button--text">HOME</a>
          </div>
        </div>
        <span class="thanks__bg-text">Thank you</span>
    </main>
  </body>
</html>