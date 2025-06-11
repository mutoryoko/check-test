@extends('layouts.default')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">)
@endsection

@section('title', 'contact')

@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2 class="contact-form__ttl">Contact</h2>
      </div>
      <form class="contact-form" action="/confirm" method="POST">
        @csrf
        <div class="contact-form__item contact-form__name">
          <label class="contact-form__label">お名前 <span class="required-mark">※</span>
            <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
            <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
          </label>
        </div>
        @error('last_name')
          {{ $message }}
        @enderror
        @error('first_name')
          {{ $message }}
        @enderror
        <div class="contact-form__item contact-form__gender">
          <label class="contact-form__label">性別 <span class="required-mark">※</span>
            <input type="radio" name="gender" value="1">男性
            <input type="radio" name="gender" value="2">女性
            <input type="radio" name="gender" value="3">その他
          </label>
        </div>
        @error('gender')
          {{ $message }}
        @enderror
        <div class="contact-form__item contact-form__email">
          <label class="contact-form__label">メールアドレス <span class="required-mark">※</span>
            <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
          </label>
        </div>
        @error('email')
          {{ $message }}
        @enderror
        <div class="contact-form__item contact-form__tel">
          <label class="contact-form__label">電話番号 <span class="required-mark">※</span>
            <input type="tel" name="tel" size="5" placeholder="080">
            <div class="hyphen">−</div>
            <input type="tel" name="tel" size="5" placeholder="1234">
            <div class="hyphen">−</div>
            <input type="tel" name="tel" size="5" placeholder="5678">
          </label>
        </div>
        @error('tel')
          {{ $message }}
        @enderror
        <div class="contact-form__item contact-form__address">
          <label class="contact-form__label">住所 <span class="required-mark">※</span>
            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
          </label>
        </div>
        @error('address')
          {{ $message }}
        @enderror
        <div class="contact-form__item contact-form__building">
          <label class="contact-form__label">建物名
            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
          </label>
        </div>
        <div class="contact-form__item contact-form__category">
          <label class="contact-form__label">お問い合わせの種類 <span class="required-mark">※</span>
            <select class="contact-form__select-cat" name="category_id" id="category">
              <option class="contact-form__select-item">選択してください</option>
              @foreach($categories as $category)
                <option class="contact-form__select-item" value="{{ $category->id }}" @if($category->id == old('category_id'))selected @endif>
                  {{ $category->content }}
                </option>
              @endforeach
            </select>
          </label>
        </div>
        @error('category_id')
          {{ $message }}
        @enderror
        <div class="contact-form__item contact-form__detail">
          <label class="contact-form__label">お問い合わせの内容 <span class="required-mark">※</span>
            <textarea name="detail" id="" cols="30" rows="5" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
          </label>
        </div>
        @error('detail')
          {{ $message }}
        @enderror
        <div class="contact-form__button">
          <button class="contact-form__btn-submit">確認画面</button>
        </div>
      </form>
    </div>
@endsection