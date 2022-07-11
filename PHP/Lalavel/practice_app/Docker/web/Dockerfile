# nginxは、偶数が安定バージョン
FROM nginx:1.20

ENV TZ Asia/Tokyo
COPY ./Docker/web/default.conf /etc/nginx/conf.d/default.conf
# COPY ./default.conf /etc/nginx/conf.d/default.conf
CMD ["nginx", "-g", "daemon off;"]