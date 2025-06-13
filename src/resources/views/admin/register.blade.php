@extends('layouts.admin')

@section('title', 'Register')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('header-btn')
  <a class="header__btn" href="">login</a>
@endsection

@section('form-title', 'Register')

@section('form')
  <form class="register-form" action="" method="">
    <div class="register-form__item">
      <label class="form-label" for="name">お名前</label>
      <div class="form-input">
        <input type="text" name="name" id="name" value="" placeholder="例: 山田　太郎">
      </div>
    </div>
    <div class="register-form__item">
      <label class="form-label" for="email">メールアドレス</label>
      <div class="form-input">
        <input type="email" name="email" value="" placeholder="例: test@example.com">
      </div>
    </div>
    <div class="register-form__item">
      <label class="form-label" for="password">パスワード</label>
      <div class="form-input">
        <input type="password" name="password" id="password" value="" placeholder="例: coachtech1106">
      </div>
    </div>
    <div class="register-form__button">
      <button class="register__btn--submit" type="submit">登録</button>
    </div>
  </form>
@endsection