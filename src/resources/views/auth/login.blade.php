@extends('layouts.admin')

@section('title', 'Login')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-btn')
  <a class="header__btn" href="{{ route('auth.register') }}">register</a>
@endsection

@section('form-title', 'Login')

@section('form')
<form class="login-form" action="{{ route('auth.login') }}" method="post">
  @csrf
  <div class="login-form__item">
    <label class="form-label" for="email">メールアドレス</label>
    <div class="form-input">
      <input type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">
    </div>
    @error('email')
        <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div class="login-form__item">
    <label class="form-label" for="password">パスワード</label>
    <div class="form-input">
      <input type="password" name="password" id="password" placeholder="例: coachtech1106">
    </div>
    @error('password')
        <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div class="login-form__button">
    <button class="login__btn--submit" type="submit">ログイン</button>
  </div>
</form>
@endsection


