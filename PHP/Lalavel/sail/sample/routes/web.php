<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

// 登録
// RegisterControllerクラスのcreateメソッドを呼び出し
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])
    ->middleware('guest')
	// name()で、Routeの名前を付けている。この指定でviewから呼び出しが可能
    ->name('register');

// storeメソッドを呼び出し
Route::post
    ('/register', [App\Http\Controllers\RegisterController::class, 'store'])
    ->middleware('guest');


// ログイン
// Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])
// 	// 認証されていれば、homeにリダイレクト.RedirectIfAuthenticatedのhandle()
// 	->middleware('guest')
// 	->name('login');

// Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])
// 	->middleware('guest');



Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])
->middleware('guest')
->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])
    ->middleware('guest');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');