@extends('layouts.admin')

@section('title', 'Login')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-btn')
  <a class="header__btn" href="">register</a>
@endsection

@section('form-title', 'Login')

@section('form')
<form class="login-form" action="" method="">
  <div class="login-form__item">
    <label class="form-label" for="email">メールアドレス</label>
    <div class="form-input">
      <input type="email" name="email" value="" placeholder="例: test@example.com">
    </div>
  </div>
  <div class="login-form__item">
    <label class="form-label" for="password">パスワード</label>
    <div class="form-input">
      <input type="password" name="password" id="password" value="" placeholder="例: coachtech1106">
    </div>
  </div>
  <div class="login-form__button">
    <button class="login__btn--submit" type="submit">ログイン</button>
  </div>
</form>
@endsection


