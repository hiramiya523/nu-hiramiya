<?php
// パスワードは以下の関数でハッシュ化
// password_hash("test1", PASSWORD_DEFAULT);
define("M_USERS", [
    ["i_id_user" => 1,
		"s_account" => "test1",
		// 平文パスワードは test1
		"s_password_hashed" => '$2y$10$5KVCinjke2U4ylK.0HZuWOfkNXzQfTDyf2akn.SackqNJ8P/Isitq',
	],
	[
		"i_id_user" => 2,
		"s_account" => "test2",
		// 平文パスワードは test2
		"s_password_hashed" => '$2y$10$bqy1jybFdAr2h0qk3hNtYeSD.o0OXGgj5D2gfmbqir6UKHDCNz9nm',
    ]
]);

/**
 * セッション設定
 * 必ず読み込まれるファイルに設定するとよい。
 */
// サーバが発行していないセッションIDの受け入れを拒否
ini_set("session.use_strict_mode", 1);

// cookieを使用してよいか
ini_set("session.use_cookies", 1);
// セッションIDのやり取りはCokkieのみに限定する。
// URLにセッションIDを付加して管理することも可能で、その容易にセッションハイジャックされる。
ini_set("session.use_only_cookies", 1);

// idの長さを指定
ini_set("session.sid_length", 64);

// セッションファイルの有効期間(86400は１日)
ini_set("session.gc_maxlifetime", "86400");
// 有効期間超過時、session.gc_probability / session.gc_divisor の確立でGCが動作
ini_set("session.gc_probability", 1);
ini_set("session.gc_divisor", 1);

/**
 * セッションファイルの保存先
 * デフォルト設定だと、同一サーバ内すべてのアプリケーションが同じディレクトリに保存してしまう。
 * 他アプリケーションのセッションGCで意図せずファイルが削除されてしまうので、アプリケーション固有の場所に設定する。
 * 必ず、Apacheのドキュメントルート外か、htaccessファイルでアクセス不可能なディレクトリを指定すること。
 */