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
alias sail="./vondor/bin/sail"

# sail コマンド
- ./vendor/bin/sail up -d