# cmd
composer create-project --prefer-dist laravel/laravel Quiz
docker compose up -d --build

# 環境
public/index.php にアクセスすれば、nginx経由で表示可能

# 構築手順
## 
.envのAPP_NAMEを編集
docker compose exec app bash
rm -R ${APP_NAME}
composer global require laravel/installer
laravel new --fource MemoQuizzing

composer create-project --prefer-dist laravel/laravel MemoQuizzing

docker-compose exec app bash -c "cd /var/www/public_html/MemoQuizzing&& composer install"