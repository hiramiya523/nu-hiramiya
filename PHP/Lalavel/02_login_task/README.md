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

### dockerfile単体で起動
docker build . -t {image_name}
docker run -it -d {image_id} /bin/bash
docker exec -it {container_id} /bin/bash

