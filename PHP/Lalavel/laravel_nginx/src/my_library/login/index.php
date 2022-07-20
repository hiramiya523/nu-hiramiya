<?php
require_once __DIR__ . "/constants.php";

session_start();
// ログインしていればマイページ、なければログインページに振り分け
$_SESSION['i_id_user'] = "test";
var_dump($_SESSION);

// if(isset($_SESSION['i_id_user'])){
//     header("Location: ./mypage.php");
//     exit;
// }else{
//     header('Location: ./login_form.php');
//     exit;
// }
// session_write_close();