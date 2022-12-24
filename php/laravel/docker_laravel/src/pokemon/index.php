<?php
require_once __DIR__ . '/domain/Monster.php';

use Domain\Monster;

session_start();

session_destroy();
unset($_SESSION);

// 起動処理

// 最初のモンスターを選択

// 選んだモンスターのステータスを表示

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パチモン！！</title>
</head>
<body>
    <form action="battle.php" method="POST">
        <p>あなたのモンスターは</p>
        <input type="text" name="name" placeholder="ニックネーム">
        <input type="submit" name="battle" value="魔王戦">
    </form>
</body>
</html>