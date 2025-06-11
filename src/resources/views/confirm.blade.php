@extends('layouts.default')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('title', 'confirm')

@section('content')
    <div class="confirm__content">
      <table class="confirm-table">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="conform-table__input">
            <input type="text" name="name" value="{{ $contact->last_name }} {{ $contact->first_name }}" readonly>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="conform-table__input">
            <input type="text" name="gender" value="{{ $contact->gender }}" readonly>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="conform-table__input">
            <input type="text" name="email" value="{{ $contact->email }}" readonly>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="conform-table__input">
            <input type="text" name="tel" value="{{ $contact->tel }}" readonly>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="conform-table__input">
            <input type="text" name="address" value="{{ $contact->address }}" readonly>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="conform-table__input">
            <input type="text" name="building" value="{{ $contact->building }}" readonly>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせの種類</th>
          <td class="conform-table__input">
            <input type="text" name="category_id" value="{{ $contact->category }}" readonly>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="conform-table__input">
            <input type="text" name="detail" value="{{ $contact->detail }}" readonly>
          </td>
        </tr>
      </table>
      <form action="" method="POST">
        @csrf
        <button type="submit" class="confirm__btn-submit">送信</button>
        <a href="/" class="edit__btn">修正</a>
      </form>

    </div>
@endsection