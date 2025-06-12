@extends('layouts.default')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('title', 'confirm')

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
            <td class="conform-table__input">
              <input class="name__input" type="text" name="last_name" value="{{ $form['last_name'] }}" readonly>
              <input class="name__input" type="text" name="first_name" value="{{ $form['first_name'] }}" readonly>
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="conform-table__input">
              <div class="gender_label">{{ $gender_label }}</div>
              <input type="hidden" name="gender" value="{{ $form['gender'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="conform-table__input">
              <input type="text" name="email" value="{{ $form['email'] }}" readonly>
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">電話番号</th>
            <td class="conform-table__input">
              <input type="text" name="tel" value="{{ $fullTel }}" readonly>
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">住所</th>
            <td class="conform-table__input">
              <input type="text" name="address" value="{{ $form['address'] }}" readonly>
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">建物名</th>
            <td class="conform-table__input">
              <input type="text" name="building" value="{{ $form['building'] }}" readonly>
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせの種類</th>
            <td class="conform-table__input">
              <div class="category_name">{{ $category->content }}</div>
              <input type="hidden" name="category_id" value="{{ $form['category_id'] }}">
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせ内容</th>
            <td class="conform-table__input">
              <input type="text" name="detail" value="{{ $form['detail'] }}" readonly>
            </td>
          </tr>
        </table>
        <div class="confirm-form__buttons">
          <button class="confirm-form__btn--submit">送信</button>
          <a href="{{ route('contact.index') }}" class="confirm-form__btn--edit">修正</a>
        </div>
      </form>
    </div>
@endsection