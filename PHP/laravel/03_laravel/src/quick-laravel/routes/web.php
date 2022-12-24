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

// ルートを定義
// 「/hello」に対するルート
// Route::get('/hello', 'App\Http\Controllers\HelloController@index');
// // 以下のように、namespaseを指定することもできる。
// use App\Http\Controllers\HelloController;
// Route::get('/hello', [HelloController::class, 'index']);
// さらに、アプリ全体で定義する場合は/app/Providers/Controllersの$namespace等を編集する
Route::get('/hello', 'HelloController@index');

// bladeテンプレ テスト
Route::get('/hello/view', 'HelloController@view_test');

// Model Eloquent
Route::get('hello/list', 'HelloController@list');

// 予約文字のエスケープ
Route::get('/view/escape', 'ViewController@escape');

// ifディレクティブ
Route::get('view/if', 'ViewController@if');

// 色々ディレクティブ
Route::get('view/directive', 'ViewController@directive');