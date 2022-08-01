### note
apt-get clean では /var/cache/apt/archives にキャッシュされている全てのパッケージを削除、
rm -rf /var/lib/apt/lists/* では /var/cache/apt/list にキャッシュされている全てのパッケージリストを削除します。


## develop
・停止中のコンテナ削除
docker container prune
・未使用のイメージ削除
docker image prune
・未使用のボリューム削除
docker volume prune
・未使用のネットワーク削除
docker network prune
・ビルドキャッシュ削除
docker builder prune
・上記すべて削除
docker system prune

・volumeの削除
docker volume ls
docker volume rm <volume name>

### alpine コンテナに入る
bash を ashにする

### dockerfile単体で起動
docker build . -t {image_name}
docker run -it -d {image_id} /bin/bash
docker exec -it {container_id} /bin/bash

#### nginx単体
docker build . -t nginx:1_0
docker run --name nginx_container -itd -p 8180:80 nginx:1.0
 -dはデタッチドモード

## nginx
### 構文チェック
nginx -t

## mysql


## composer 
初期化
composer init

phpunitインストール
composer require phpunit/phpunit --dev


list
composer show -i


### laravel
#### install
laravel installの場合
composer global require laravle/installer
cd /root/.composer/vendor/bin
./laravel help --version

pathを通す>>dekin. toosenai
export="$PATH:/root/.composer/vendor/bin/laravel"
source ~/.profile

cd /var/www/app/public
larable new quick-laravel

/root/.composer/vendor/bin/laravel new quick-laravel

composerからの場合
conposer create-project laravel/laravel quick-laravel