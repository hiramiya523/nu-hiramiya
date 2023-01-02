# common cmd
u:
	docker compose up -d
d:
	docker compose down
b:
	docker compose build --no-cache --force-rm --parallel
l:
	docker compose logs
ps:
	docker compose ps
top:
	docker compose top

# depend on env
app:
	docker compose exec app bash

db:
	docker compose exec db bash

# 環境変数の設定が必要
sql:
	docker compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
