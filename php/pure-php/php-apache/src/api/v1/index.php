<?php
// 「api/v1/ * hoge/fuga 」のようなアクセス時、.htaccessでこのスクリプトを実行するようにする

$script_name = $_SERVER;
//  /api/v1/index.php
// var_dump($script_name['SCRIPT_NAME']);
//  /api/v1/get/12
// var_dump($script_name['REQUEST_URI']);

$s_file_path = null;
// dirname($script_name['SCRIPT_NAME']); . '/'
// \w	単語構成文字:[a-zA-Z_0-9]
// /api/vi/ + 半角英数字 のパターンを取得
// preg_match();


// preg_match('|'.dirname($_SERVER["SCRIPT_NAME"]).'/([\w%/]*)|', $_SERVER["REQUEST_URI"], $matches);

$s_delimiter = '~';
preg_match($s_delimiter .dirname($_SERVER["SCRIPT_NAME"]).'/([\w%/]*)' . $s_delimiter,
    $_SERVER["REQUEST_URI"], $matches);

var_dump($matches);
exit;
var_dump('|'.dirname($_SERVER["SCRIPT_NAME"]).'/([\w%/]*)|');
$paths = explode('/',$matches[1]);
$file = array_shift($paths);

var_dump($paths);
var_dump($file);
