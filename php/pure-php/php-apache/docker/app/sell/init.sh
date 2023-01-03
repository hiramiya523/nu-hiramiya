#!/bin/sh

# mariadb
service mariadb start

# sql => 成功
mysql -u root < ../sql/ini.sql 
