# WSL Ubuntu に Javaインストール
apt update
apt search openjdk | grep 11

sudo -y apt install openjdk-11-jdk

java --version


```
export JAVA_HOME=$(readlink -f /usr/bin/javac | sed "s:/bin/javac::")
export PATT=$PATH:$JAVA_HOME/bin
```


apt info graphviz 
apt install -y graphviz
which dot
dot -V


文字化け
sudo apt install plantuml
 plantuml -printfonts | grep JP
 sudo apt install fonts-noto-cjk


# Xdebug in VScode
## 参考
https://ichi-station.com/php-xdebug-vscode-docker/


# docker php-apacheに、mysql
- maria
apt-cache show mariadb-server
apt-get install -y mariadb-server

- driver
apt-cache search pdo
apt search pdo

apt install php-mysql


apt-get install -y php-pdo
apt-get install php8-mysql

phpのモジュールが不足
php -m | grep pdo


- 起動
service mariadb start


## user作成、権限設定
CREATE USER 'user'@'localhost' IDENTIFIED BY 'pass';
GRANT ALL PRIVILEGES ON * . * TO 'user'@'localhost';
-- reload
FLUSH PRIVILEGES;
