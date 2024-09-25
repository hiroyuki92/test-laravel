<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactForm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form
      </a>
    </div>
    </header>

    <div class="contact-form">
        <div class="contact-form__title">
            <h2>お問い合わせ</h2>
        </div>
        <form class="contact-form__content" action="/contacts/confirm" method="post">
            @csrf
            <div class="contact-form__group">
                <div class="contact-form__title-label">
                    <span class="contact-form__label">お名前</span>
                    <span class="contact-form__label-required">必須</span>
                </div>
                <div class="contact-form__group-content">
                    <div class="contact-form__input--text">
                        <input type="text" name="name" placeholder="テスト太郎">
                    </div>
                </div>
            </div>
            <div class="contact-form__group">
                <div class="contact-form__title-label">
                    <span class="contact-form__label">メールアドレス</span>
                    <span class="contact-form__label-required">必須</span>
                </div>
                <div class="contact-form__group-content">
                    <div class="contact-form__input--text">
                    <input type="email" name="email" placeholder="test@example.com">
                    </div>
                </div>
            </div>
            <div class="contact-form__group">
                <div class="contact-form__title-label">
                    <span class="contact-form__label">電話番号</span>
                    <span class="contact-form__label-required">必須</span>
                </div>
                <div class="contact-form__group-content">
                    <div class="contact-form__input--text">
                        <input type="tel" name="tel" placeholder="09012345678">
                    </div>
                </div>
            </div>
            <div class="contact-form__group">
                <div class="contact-form__title-label">
                    <span class="contact-form__label">お問い合わせ内容</span>
                </div>
                <div class="contact-form__item-textarea">
                    <textarea name="contact-form__item-input-textarea" placeholder="資料をいただきたいです"></textarea>
                </div>
            </div>
            <div class="contact-form__button">
                <button class="contact-form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>


</body>
</html>