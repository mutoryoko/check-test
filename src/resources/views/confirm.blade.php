@extends('layouts.default')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('title', 'Confirm')

@section('content')
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2 class="confirm__ttl">Confirm</h2>
      </div>
      <form class="confirm-form" action="{{ route('contact.store') }}" method="POST">
        @csrf
        <table class="confirm-table">
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__input">
              <div class="readonly">{{ $fullname }}</div>
              <input class="name__input" type="hidden" name="last_name" value="{{ $form['last_name'] }}">
              <input class="name__input" type="hidden" name="first_name" value="{{ $form['first_name'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="confirm-table__input">
              <div class="readonly">{{ $gender_label }}</div>
              <input type="hidden" name="gender" value="{{ $form['gender'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="confirm-table__input">
              <div class="readonly">{{ $form['email'] }}</div>
              <input type="hidden" name="email" value="{{ $form['email'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">電話番号</th>
            <td class="confirm-table__input">
              <div class="readonly">{{ $form['tel'] }}</div>
              <input type="hidden" name="tel" value="{{ $form['tel'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">住所</th>
            <td class="confirm-table__input">
              <div class="readonly">{{ $form['address'] }}</div>
              <input type="hidden" name="address" value="{{ $form['address'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">建物名</th>
            <td class="confirm-table__input">
              <div class="readonly">{{ $form['building'] }}</div>
              <input type="hidden" name="building" value="{{ $form['building'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせの種類</th>
            <td class="confirm-table__input">
              <div class="readonly">{{ $category->content }}</div>
              <input type="hidden" name="category_id" value="{{ $form['category_id'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせ内容</th>
            <td class="confirm-table__input">
              <div class="readonly">{{ $form['detail'] }}</div>
              <input type="hidden" name="detail" value="{{ $form['detail'] }}">
            </td>
          </tr>
        </table>
        <div class="confirm-form__buttons">
          <button type="submit" class="confirm-form__btn--submit">送信</button>
          <a href="{{ route('contact.index') }}" class="confirm-form__btn--edit">修正</a>
        </div>
      </form>
    </div>
@endsection