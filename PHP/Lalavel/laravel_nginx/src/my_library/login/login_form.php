<?php

include __DIR__ . "/constants.php";

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>ログイン</title>
</head>

<body>
	<form action="./login.php" method="POST">
		<div>
			<label for="account">アカウント</label>
			<input type="text" id="account" name="account">
		</div>
		<div>
			<label for="password">パスワード</label>
			<input type="password" id="password" name="password">
		</div>
		<div>
			<button type="submit">ログイン</button>
		</div>
	</form>
</body>

</html>