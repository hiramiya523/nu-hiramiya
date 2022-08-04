<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function escape()
    {
        return view('view.escape', [
            'msg' => '<h1>やあ</h1><p>ようこそこちら側へ</p>'
        ]);
    }

    public function if()
    {
        return view('view.if', [
            'radom' => random_int(0, 100)
        ]);
    }
}
