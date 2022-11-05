# 構築
curl -s https://laravel.build/sample | bash

# make
- sudo apt install build-essential -y
- make -v
- vim Makefile
```
up:
    ./vendor/bin/sail up -d

down:
    ./vendor/bin/sail down

shell:
    ./vendor/bin/sail shell

ps:
    ./vendor/bin/sail ps

mysql:
    ./vendor/bin/sail mysql
```

- make up

# sail ailas
alias sail="./vendor/bin/sail"

# sail コマンド
- トップ画面のテストコードを生成
    コンテナ外
        sail artisan make:test HomeTest
    内
        php artisan make:test HomeTests
- テスト実行
    sail test tests/Feature/HomeTest
    ⇒ 見つからない
    ⇒ 拡張子まで必要
    sail test tests/Feature/HomeTest.php
    
    sail test 
    ⇒全体実行ならできる

    php artisan test

# テストコードの書き方
テストメソッドの先頭は「test」から始める

# migration 実行
sail artisan migrate

# controller 作成
sail artisan make:controller RegsterController