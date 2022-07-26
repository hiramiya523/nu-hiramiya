https://www.twilio.com/blog/get-started-docker-laravel-jp


# create laravel project
1. docker compose exec app /bin/bash

2. バージョン8系で作る
composer create-project laravel/laravel=8.* .
最新のとき
composer create-project laravel/laravel .

3. 
chmod 777 -Rf storage
storage 以下に書き込み権限を付ける