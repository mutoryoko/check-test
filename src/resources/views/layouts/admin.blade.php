<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  @yield('css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a href="#" class="header__logo">FashionablyLate</a>
      @yield('header-btn')
    </div>
  </header>
  <main>
    <div class="content">
      <div class="form__heading">
        <h2 class="form__ttl">@yield('form-title')</h2>
      </div>
      <div class="form__wrapper">
        @yield('form')
      </div>
    </div>
  </main>
</body>
