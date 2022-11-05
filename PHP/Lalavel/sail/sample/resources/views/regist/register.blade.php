<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザ登録フォーム</title>
</head>
<body>
    <form name="registform" action="./register" method="POST" id="registform">
        {{-- CSRFトークンの挿入 --}}
        {{-- {{ csrf_token()  }} --}}

        {{-- input.hiddenにトークンを入れてくれる --}}
        @csrf
        <dl>
            <dt>名前:</dt>
            <dd><input type="text" name="name" size="30">
        {{-- ミドルウェアで定義されているため、すべてのビューで --}}
        {{-- $errors変数は常に定義される。validation内容が返る --}}
            <span>{{ $errors->first('name') }}</span></dd>
        </dl>
        <dl>
            <dt>メールアドレス:</dt>
            <dd><input type="email" name="email" size="30">
                {{-- 指定したフィールドの最初のエラーメッセージを取得するのにfirst() --}}
            <span>{{ $errors->first('email') }}</span></dd>
        </dl>
        <dl>
            <dt>パスワード:</dt>
            <dd><input type="password" name="password" size="30">
            <span>{{ $errors->first('password') }}</span></dd>
        </dl>
        <dl>
            <dt>パスワード(確認):</dt>
            <dd><input type="password" name="password_confirmation" size="30">
                {{--  {field}_confirmation --}}
            <span>{{ $errors->first('password_confirmation') }}</span></dd>
        </dl>
        <button type="submit" name="action" value="send">送信</button>
    </form>
</body>
</html>