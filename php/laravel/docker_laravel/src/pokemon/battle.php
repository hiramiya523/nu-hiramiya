<?php
require_once __DIR__ . '/domain/Monster.php';
require_once __DIR__ . '/domain/service/Battle.php';

use Domain\Monster;
use Domain\Service\Battle;


// ini_set('display_errors', 'On');

session_start();

if(!isset($_SESSION['situation']) && !isset($_POST['battle'])){    
    header('Location: index.php');
    exit;
}

$_SESSION['situation'] = 'battle';


if(
    !(isset($_SESSION['o_player']) && isset($_SESSION['o_devil_king']))
){
    if(empty($_POST['name'])){
        $s_name = 'ああああああ';
    }else{
        $s_name = $_POST['name'];
    }

    $o_player = new Monster($s_name, true);
    $o_devil_king = new Monster('魔王', false);
    $o_battle = Battle::get_singleton($o_player, $o_devil_king);

    $_SESSION['o_player'] = $o_player;
    $_SESSION['o_devil_king'] = $o_devil_king;
    $_SESSION['o_battle'] = $o_battle;
}else{
    $o_player = $_SESSION['o_player'];
    $o_devil_king = $_SESSION['o_devil_king'];
    $o_battle = $_SESSION['o_battle'];
}
?>
<a href="./">逃げる</a>
<?php

if(isset($_POST['action'])){
    if($_POST['action'] === '攻撃'){
        $winner = $o_battle->attack();

        if(!is_null($winner)){
            if($winner->judge_ally()){
                echo 'おめでとうございます！あなたの勝利です！！';
            }else{
                echo '敗北しました．．．';
            }
            session_destroy();
            $_SESSION = [];
            exit;
        }
    }
}


session_write_close();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>戦闘！！</title>
</head>
<body>
    <br>
    <div>
        <div><?php echo $o_devil_king->get_name(); ?></div>
        <p>hp: <?php echo $o_devil_king->get_hp(); ?></p>
    </div>
    <br>
    <div>
        <div>勇者<?php echo $o_player->get_name(); ?></div>
        <p>hp: <?php echo $o_player->get_hp(); ?></p>
    </div>
    <form action="" method="POST">
        <p>攻撃する</p>
        <input type="submit" value="攻撃" name="action">
    </form>

    <br>
    <a href="./">逃げる</a>
</body>
</html>