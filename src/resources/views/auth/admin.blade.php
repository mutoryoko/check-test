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
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a href="#" class="header__logo">FashionablyLate</a>
      <form class="header__btn" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="header__btn--submit" type="submit">logout</button>
      </form>
    </div>
  </header>
  <main>
    <div class="content">
      <div class="form__heading">
        <h2 class="form__ttl">Admin</h2>
      </div>
      <div class="search-form__wrapper">
        <form class="search-form" action="" method="get">
          <div class="search-form__inputs">
            <input class="search-form__keyword" name="keyword" type="search" placeholder="名前やメールアドレスを入力してください ">
            <select class="search-form__gender" name="gender">
              <option value="">性別</option>
              <option value="">全て</option>
              @foreach (config('constants.genders') as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
              @endforeach
            </select>
            <select class="search-form__category" name="category_id">
              <option>お問い合わせの種類</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->content }}</option>
              @endforeach
            </select>
            <input class="search-form__date" type="date" name="date">
          </div>
          <div class="search-form__buttons">
            <button class="search-form__btn--submit" type="submit">検索</button>
            <button class="search-form__btn--reset" type="reset">リセット</button>
          </div>
        </form>
      </div>
      <div class="d-flex justify-content-between align-items-center">
        <a class="export__button" download="#">エクスポート</a>
        @if(isset($contacts))
          {{ $contacts->links() }}
        @endif
      </div>
      <table class="contacts__table">
        <thead class="contacts__table--head">
          <tr>
            <th class="table-label">お名前</th>
            <th class="table-label">性別</th>
            <th class="table-label">メールアドレス</th>
            <th class="table-label">お問い合わせの種類</th>
            <th class="table-label">詳細</th>
          </tr>
        </thead>
        <tbody class="contacts__table--body">
        @if(isset($contacts))
          @foreach ($contacts as $contact)
            <tr class="tbody-row">
                <td>{{ $contact->last_name }}　{{$contact->first_name}}</td>
                <td>
                  <input type="hidden" value="{{ $contact->gender }}" />
                  {{ config('constants.genders')[$contact->gender] ?? '不明' }}
                </td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->category->content ?? '未分類' }}</td>
                <td>詳細</td>
            </tr>
          @endforeach
        @endif
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>