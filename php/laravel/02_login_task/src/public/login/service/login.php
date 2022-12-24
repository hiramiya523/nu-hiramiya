<?php
require_once __DIR__ . '/../db/LoginDb.php';
/**
 * serviceは公開ディレクトリから対比する設定に変更する
 * ログイン判定処理
 */

// new PDO();
echo 'user_name : '; var_dump($_POST['s_user_name']); echo '</br>';
echo 'pass : '; var_dump($_POST['s_password']); echo '</br>';
