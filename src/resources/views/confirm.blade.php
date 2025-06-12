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
      <form class="confirm-form" action="/thanks" method="POST">
        @csrf
        <table class="confirm-table">
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="conform-table__input">
              <input type="text" name="last_name" value="{{ $form['last_name'] }}" readonly>
              <input type="text" name="first_name" value="{{ $form['first_name'] }}" readonly>
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="conform-table__input">
              <input type="text" name="gender" value="" readonly>
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
              <input type="text" name="tel" value="" readonly>
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
              <input type="text" name="category_id" value="" readonly>
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせ内容</th>
            <td class="conform-table__input">
              <input type="text" name="detail" value="{{ $form['detail'] }}" readonly>
            </td>
          </tr>
        </table>
        <button type="submit" class="confirm__btn-submit">送信</button>
        <a href="/" class="edit__btn">修正</a>
      </form>
    </div>
@endsection