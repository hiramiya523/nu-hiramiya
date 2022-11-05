FROM nginx:1.20-alpine

ENV TZ Asia/Tokyo

# 考察：rootユーザで動くnginxアプリのみ実行権限を与え、他はとりあえず読み書きだけにしている？
RUN chmod 755 -R /root

# 空のファイルを送るとコンテナが落ちる
COPY ./default.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/public_html