<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>
<!-------------------------------------------------------------->
  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <!--<form class="form">-->
        <form class="form" action="/contacts/confirm" method="post">
          @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="山田" value="{{ old('name') }}" />
              <input type="text" name="name" placeholder="太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('name')
   {{ $message }}
   @enderror
            </div>
          </div>
        </div>
<!-------------------------------------------------------------->
        <p>性別
<input type="radio" name="q1" value="男"> 男
<input type="radio" name="q1" value="女"> 女
<input type="radio" name="q1" value="その他"> その他
</p>
        <!-------------------------------------------------------------->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <!-------------------------------------------------------------->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <!-------------------------------------------------------------->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="" name="" placeholder="東京都渋谷区" value="{{ old('') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <!-------------------------------------------------------------->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="" name="" placeholder="例：マンション101" value="{{ old('') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <!-------------------------------------------------------------->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <select name="content" placeholder="選択してください">
                <option>選択してください</option>
              </select>
            </div>
          </div>
        </div>
        <!-------------------------------------------------------------->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
          </div>
        </div>
        <!-------------------------------------------------------------->
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>