FROM nginx:1.20-alpine

ENV TZ Asia/Tokyo

# デフォルトで用意されている個別設定ファイルを削除
# RUN rm -f /etc/nginx/conf.d/*

# 考察：rootユーザで動くnginxアプリのみ実行権限を与え、他はとりあえず読み書きだけにしている？
RUN chmod 755 -R /root

# 空のファイルを送るとコンテナが落ちる
COPY ./nginx.conf /etc/nginx/nginx.conf