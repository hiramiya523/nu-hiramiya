<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 共通用に宣言
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view 共通変数を定義
        View::share('appTitle', '共通やで！');
    }
}
