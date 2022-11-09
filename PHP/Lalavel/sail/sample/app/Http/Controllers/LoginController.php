<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // リクエストパラメータから、取得するデータを指定
        $credentials = $request->only('email', 'password');

        // SessionGuard.php に実装あり
        // 認証に利用するパラメータを渡す。ログイン状態維持する場合第二引数にtrueを指定する。
        // if(Auth::attempt($credentials, true)){ 
        
        // session取得
        // $session = $request->session()->get('name');
        // $session = $request->session()->all();
        // dd($session);
        // var_dump($credentials);
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            // セッション再生成
            $request->session()->regenerate();
            // /homeにリダイレクトする
            return redirect()->intended(RouteServiceProvider::HOME);

            // intendedの機能は
            // セッションの、'url.intended'に値がセットされていたらそこにリダイレクト
            // 逆に値がなければ'/'にリダイレクト
        }

        return back()->withErrors([
            'message' => 'メールアドレスまたはパスワードが正しくありません。'
        ]);
    }
}
