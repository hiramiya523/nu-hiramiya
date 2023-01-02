<?php 
// ブラウザ終了時にcookieを削除させる
ini_set('session.cookie.lifetime', 0);

// cookieでのみsessionIDを管理する. urlでのやり取り等はセッションハイジャックの危険.
ini_set('session.use_cookies', 'On');
// offだと、未初期化前のGET/POST/URLで送られたIDを使っちゃう
ini_set('session.use_only_cookies', 'On');

// session モジュールが生成した有効なIDだけ受け入れるようにする
ini_set('session.use_strict_mode', 'On');

// javascriptからのアクセスを拒否
ini_set('session.cookie_httponly', 'On');

ini_set('', '');

// 文字数
ini_set('session.sid_length', '128');
var_dump(ini_get('session.sid_length'));
exit;

// 文字のbit数を指定. 大きいほど長さが同じでも強度が上がる. 記述時の公式推奨値は5
//  ‘4’ (0-9, a-f)、’5′ (0-9, a-v)、’6′ (0-9, a-z, A-Z, “-“, “,”) 
ini_set('session.sid_bits_per_character', '5');

// ini_set('', '');
// ini_set('', '');

// ini setって、リダイレクト先にも影響してんの？ 普通に考えたら、設定がスクリプトを跨ぐのは怖いが
// => 結論、跨がない。毎回設定ファイルを読み込むように作る。
header('Location: confirm.php');
exit;
