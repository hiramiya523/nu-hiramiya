<?php 
echo 1;
    try {
        $dsn = 'mysql:host=db;dbname=mydb;charset=utf8';
        $db = new PDO($dsn, 'user', 'pass');

        $sql = 'SELECT version();';
        $contact = $db->prepare($sql);
        $contact->execute();
        $result = $contact->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <form action="./service/login.php" method="post">
        <div>
            <label for="">ユーザ名: </label>
            <input type="text" name="s_user_name" placeholder="Username" maxlength="20" required>
        </div>
        <div>
            <input type="password" name="s_password" placeholder="Password" maxlength="20" required>
        </div>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>