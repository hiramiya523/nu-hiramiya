-- 権限設定
-- select user, host from mysql.user;
show grants for 'user'@'%';
GRANT ALL ON *.* TO 'user'@'%';

DROP DATABASE IF EXISTS my_db;

CREATE DATABASE IF NOT EXISTS mydb
CHARAcTER SET utf8mb4 
COLLATE utf8mb4_bin;

CREATE TABLE IF NOT EXISTS mydb.t_user(
    c_user_name VARCHAR(20) NOT NULL COMMENT 'ユーザ名',
    c_email VARCHAR(319) NOT NULL COMMENT 'メールアドレス',
    c_password VARCHAR(256) NOT NULL COMMENT 'パスワード',
    dt_create DATETIME NOT NULL COMMENT '登録日'
) COMMETN 'ユーザ情報';

INSERT INTO mydb.t_user (c_user_name, c_email, c_password, dt_create) VALUE ('admin', 'admin', 'admin@admin', 'pass',now());
select * FROM mydb.t_user;