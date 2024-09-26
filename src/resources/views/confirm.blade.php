<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactForm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>
<body>
    <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form
      </a>
    </div>
    </header>

    <div class="confirm-form">
        <div class="confirm-form__title">
            <h2>お問い合わせ内容確認</h2>
        </div>

        <form class="form" action="/contacts" method="post">
        @csrf
            <table class="confirm-table">
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">名前</th>
                        <td class="confirm-table__item">
                            <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                        </td>
                    </th>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">メールアドレス</th>
                        <td class="confirm-table__item">
                            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                        </td>
                    </th>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">電話番号</th>
                        <td class="confirm-table__item">
                            <input type="tel" name="tel"  value="{{ $contact['tel'] }}" readonly />
                        </td>
                    </th>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">お問い合わせ内容</th>
                        <td class="confirm-table__item">
                            <input type="text" name="content"  value="{{ $contact['content'] }}" readonly />
                        </td>
                    </th>
                </tr>

            </table>
            <div class="confirm-form__button">
                <button class="confirm-form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
</body>
</html>