@extends('layouts.default')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title', 'Contact')

@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2 class="contact-form__ttl">Contact</h2>
      </div>
      <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
        @csrf
        {{-- 名前 --}}
        <div class="contact-form__item contact-form__name">
          <p class="contact-form__label" for="last_name">お名前 <span class="required-mark">※</span></p>
          <div class="contact-form__input">
            <input type="text" class="last_name__input" name="last_name" id="last_name" placeholder="例: 山田" value="{{ old('last_name', session('form_input.last_name')) }}">
            <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name', session('form_input.first_name')) }}">
            @error('last_name')
              <p class="error">{{ $message }}</p>
            @enderror
            @error('first_name')
              <p class="error">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- 性別 --}}
        @php
            $selectedGender = old('gender', session('form_input.gender', 1));
        @endphp
        <div class="contact-form__item contact-form__gender">
            <p class="contact-form__label">性別 <span class="required-mark">※</span></p>
            <div class="contact-form__input gender__input">
              @foreach ($genders as $value => $label)
                <input type="radio" id="gender_{{ $value }}" name="gender" value="{{ $value }}" {{ $selectedGender == $value ? 'checked' : '' }}>
                <label class="gender__label" for="gender_{{ $value }}">{{ $label }}</label>
              @endforeach
              @error('gender')
                <p class="error">{{ $message }}</p>
              @enderror
            </div>
        </div>
        {{-- メールアドレス --}}
        <div class="contact-form__item contact-form__email">
          <p class="contact-form__label">メールアドレス <span class="required-mark">※</span></p>
          <div class="contact-form__input">
            <input type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email', session('form_input.email')) }}">
            @error('email')
              <p class="error">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- 電話番号 --}}
        <div class="contact-form__item contact-form__tel">
          <p class="contact-form__label">電話番号 <span class="required-mark">※</span></p>
          <div class="contact-form__input">
            <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1', session('form_input.tel1')) }}">
            <span class="hyphen">−</span>
            <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2', session('form_input.tel2')) }}">
            <span class="hyphen">−</span>
            <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3', session('form_input.tel3')) }}">
            @php
              $telError = collect([
                  $errors->first('tel1'), $errors->first('tel2'), $errors->first('tel3'),
              ])->filter()->first();
            @endphp
            @if ($telError)
              <p class="error">{{ $telError }}</p>
            @endif
          </div>
        </div>
        {{-- 住所 --}}
        <div class="contact-form__item contact-form__address">
          <p class="contact-form__label">住所 <span class="required-mark">※</span></p>
          <div class="contact-form__input">
            <input type="text" name="address" id="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address', session('form_input.address')) }}">
            @error('address')
              <p class="error">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- 建物名 --}}
        <div class="contact-form__item contact-form__building">
          <p class="contact-form__label">建物名</p>
          <div class="contact-form__input">
            <input type="text" name="building" id="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building', session('form_input.building')) }}">
          </div>
        </div>
        {{-- カテゴリ --}}
        <div class="contact-form__item contact-form__category">
          <p class="contact-form__label">お問い合わせの種類 <span class="required-mark">※</span></p>
          <div class="contact-form__select">
            <select class="contact-form__select-cat" name="category_id" id="category">
              <option>選択してください</option>
              @foreach($categories as $category)
                <option class="contact-form__select-item" value="{{ $category->id }}" @if($category->id == old('category_id', session('form_input.category_id')))selected @endif>
                  {{ $category->content }}
                </option>
              @endforeach
            </select>
            @error('category_id')
              <p class="error">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- お問い合わせ内容 --}}
        <div class="contact-form__item contact-form__detail">
          <p class="contact-form__label">お問い合わせの内容 <span class="required-mark">※</span></p>
          <div class="contact-form__textarea">
            <textarea class="contact-form__textarea--text" name="detail" id="detail" cols="30" rows="5" placeholder="お問い合わせ内容をご記載ください">{{ old('detail', session('form_input.detail')) }}</textarea>
            @error('detail')
              <p class="error contact-form__textarea--error">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- 確認ボタン --}}
        <div class="contact-form__button">
          <button type="submit" class="contact-form__btn-submit">確認画面</button>
        </div>
      </form>
    </div>
@endsection