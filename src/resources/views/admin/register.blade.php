@extends('layouts.admin')

@section('title', 'Register')

@section('css')
  <link rel="stylesheet" href="">
@endsection

@section('header-btn')
  <a href="">login</a>
@endsection

@section('form-title', 'Register')

@section('form')
  <form class="register-form">
    <div class="register-form__item">
      <label>お名前
        <input type="text" name="name" value="" placeholder="例: 山田　太郎">
      </label>
    </div>
    <div class="register-form__item">
      <label>メールアドレス
        <input type="email" name="email" value="" placeholder="例: test@example.com">
      </label>
    </div>
    <div class="register-form__item">
      <label>パスワード
        <input type="password" name="password" value="" placeholder="例: coachtech1106">
      </label>
    </div>
    <div class="register-form__btn">
      <button class="register__btn--submit" type="submit">登録</button>
    </div>
  </form>
@endsection