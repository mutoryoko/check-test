<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">FashionablyLate</h1>
    </div>
  </header>
  <main>
    <h2 class="title">Contact</h2>
    <div class="contact-form__content">
      <form class="contact-form" action="">
        <div class="contact-form__name">
          <label class="contact-form__label">お名前 <span class="required-mark">※</span>
            <input type="text" name="last_name" placeholder="例: 山田">
            <input type="text" name="first_name" placeholder="例: 太郎">
          </label>
        </div>
        <div class="contact-form__gender">
          <label class="contact-form__label">性別 <span class="required-mark">※</span>
            <input type="radio" name="gender" value="1">男性
            <input type="radio" name="gender" value="2">女性
            <input type="radio" name="gender" value="3">その他
          </label>
        </div>
        <div class="contact-form__email">
          <label class="contact-form__label">メールアドレス <span class="required-mark">※</span>
            <input type="email" name="email" placeholder="例: test@example.com">
          </label>
        </div>
        <div class="contact-form__tel">
          <label class="contact-form__label">電話番号 <span class="required-mark">※</span>
            <input type="tel" name="tel" size="4" placeholder="080"><div class="hyphen">−</div>
            <input type="tel" name="tel" size="4" placeholder="1234"><div class="hyphen">−</div>
            <input type="tel" name="tel" size="4" placeholder="5678">
          </label>
        </div>
        <div class="contact-form__address">
          <label class="contact-form__label">住所 <span class="required-mark">※</span>
            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
          </label>
        </div>
        <div class="contact-form__building">
          <label class="contact-form__label">建物名
            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
          </label>
        </div>
        <div class="contact-form__category">
          <label class="contact-form__label">お問い合わせの種類 <span class="required-mark">※</span>
            <select name="category_id" id="">
              <option value="">選択してください</option>
              {{-- @foreach($categories as $category) --}}
              <option value="">商品のお届けについて</option>
              <option value="">商品の交換について</option>
              <option value="">商品トラブル</option>
              <option value="">ショップへのお問い合わせ</option>
              <option value="">その他</option>
              {{-- @endforeach --}}
            </select>
          </label>
        </div>
        <div class="contact-form__detail">
          <label class="contact-form__label">お問い合わせの内容 <span class="required-mark">※</span>
            <textarea name="detail" id="" cols="30" rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
          </label>
        </div>
        <div class="contact-form__btn">
          <button class="contact-form__btn-submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>