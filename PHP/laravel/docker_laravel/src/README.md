docker compose build app --no-cache
docker compose up -d --build

docker compose exec app /bin/bash -c "cd appli && composer install"