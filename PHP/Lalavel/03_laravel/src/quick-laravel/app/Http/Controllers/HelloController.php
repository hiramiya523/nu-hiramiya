<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // アクションメソッド (クライアントからのリクエストを処理する、コントローラのpublic method)
    public function index(){
        return 'こんにちは、世界！';
    }
}
