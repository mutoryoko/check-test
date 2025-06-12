@extends('layouts.default')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title', 'contact')

@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2 class="contact-form__ttl">Contact</h2>
      </div>
      <form class="contact-form" action="/confirm" method="POST">
        @csrf
        {{-- 名前 --}}
        <div class="contact-form__item contact-form__name">
          <label class="contact-form__label" for="last_name">お名前 <span class="required-mark">※</span></label>
          <div class="contact-form__input">
            <input type="text" class="last_name__input" name="last_name" id="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
            <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
            @error('last_name')
              <p class="error-message">{{ $message }}</p>
            @enderror
            @error('first_name')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- 性別 --}}
        <div class="contact-form__item contact-form__gender">
          <label class="contact-form__label" for="gender">性別 <span class="required-mark">※</span></label>
          <div class="contact-form__input">
            <input type="radio" name="gender" value="1" id="gender" checked>男性
            <input type="radio" name="gender" value="2">女性
            <input type="radio" name="gender" value="3">その他
          </div>
        </div>
        @error('gender')
          <p class="error-message">{{ $message }}</p>
        @enderror
        {{-- メールアドレス --}}
        <div class="contact-form__item contact-form__email">
          <label class="contact-form__label" for="email">メールアドレス <span class="required-mark">※</span></label>
          <div class="contact-form__input">
            <input type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            @error('email')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- 電話番号 --}}
        <div class="contact-form__item contact-form__tel">
          <label class="contact-form__label" for="tel1">電話番号 <span class="required-mark">※</span></label>
          <div class="contact-form__input">
            <input type="tel" name="tel1" id="tel1" size="4" placeholder="080" value="{{ old('tel1') }}">
            <span class="hyphen">−</span>
            <input type="tel" name="tel2" size="4" placeholder="1234" value="{{ old('tel2') }}">
            <span class="hyphen">−</span>
            <input type="tel" name="tel3" size="4" placeholder="5678" value="{{ old('tel3') }}">
            @error('tel1')
              <p class="error-message">{{ $message }}</p>
            @enderror
            @error('tel2')
              <p class="error-message">{{ $message }}</p>
            @enderror
            @error('tel3')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- 住所 --}}
        <div class="contact-form__item contact-form__address">
          <label class="contact-form__label" for="address">住所 <span class="required-mark">※</span></label>
          <div class="contact-form__input">
            <input type="text" name="address" id="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
            @error('address')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- 建物名 --}}
        <div class="contact-form__item contact-form__building">
          <label class="contact-form__label" for="building">建物名</label>
          <div class="contact-form__input">
            <input type="text" name="building" id="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
          </div>
        </div>
        {{-- カテゴリ --}}
        <div class="contact-form__item contact-form__category">
          <label class="contact-form__label" for="category">お問い合わせの種類 <span class="required-mark">※</span></label>
          <div class="contact-form__select">
            <select class="contact-form__select-cat" name="category_id" id="category">
              <option>選択してください</option>
              @foreach($categories as $category)
                <option class="contact-form__select-item" value="{{ $category->id }}" @if($category->id == old('category_id'))selected @endif>
                  {{ $category->content }}
                </option>
              @endforeach
            </select>
            @error('category_id')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- お問い合わせ内容 --}}
        <div class="contact-form__item contact-form__detail">
          <label class="contact-form__label" for="detail">お問い合わせの内容 <span class="required-mark">※</span></label>
          <div class="contact-form__textarea">
            <textarea class="contact-form__textarea--text" name="detail" id="detail" cols="30" rows="5" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
            @error('detail')
              <p class="error-message contact-form__textarea--error">{{ $message }}</p>
            @enderror
          </div>
        </div>
        
        {{-- 確認ボタン --}}
        <div class="contact-form__button">
          <button class="contact-form__btn-submit">確認画面</button>
        </div>
      </form>
    </div>
@endsection