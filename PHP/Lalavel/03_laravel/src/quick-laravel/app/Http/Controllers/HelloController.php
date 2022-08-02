<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // アクションメソッド (クライアントからのリクエストを処理する、コントローラのpublic method)
    public function index(){
        return 'こんにちは、世界！';
    }

    // Bladeテンプレートを使う
    public function view_test()
    {
        // ビュー変数
        $r_data = [
            's_msg' => 'やぁ。また会ったね、世界さん！'
        ];

        // テンプレートを呼ぶ(/resources/views)
        // フォルダ名.ファイル名
        return view('hello.view_test', $r_data);
    }
}
