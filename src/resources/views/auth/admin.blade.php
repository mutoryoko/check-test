<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a href="#" class="header__logo">FashionablyLate</a>
      <a class="header__btn" href="">logout</a>
    </div>
  </header>
  <main>
    <div class="content">
      <div class="form__heading">
        <h2 class="form__ttl">Admin</h2>
      </div>
      <div class="search-form__wrapper">
        <form class="search-form" action="" method="get">
          <input type="search" placeholder="名前やメールアドレスを入力してください ">
          <select name="gender">
            <option value="">性別</option>
          </select>
          <select name="category">
            <option value="">お問い合わせの種類</option>
          </select>
          <input type="date" name="date">
          <button type="submit">検索</button>
          <button type="reset">リセット</button>
        </form>
      </div>
      <div class="export__button">
        <a class="export__btn--submit" download="#">エクスポート</a>
      </div>
      <div class="page">
        {{-- {{ $contacts->links() }} --}}
      </div>
      <table class="contacts__table">
        <thead class="contacts__table--head">
          <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="contacts__table--body">
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>