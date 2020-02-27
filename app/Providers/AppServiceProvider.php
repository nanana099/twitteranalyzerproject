<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TwitterAccount;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        # 商用環境以外だった場合、SQLログを出力させます
        if (config('app.env') !== 'production') {
            \DB::listen(function ($query) {
                \Log::info("Query Time:{$query->time}s] $query->sql");
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Todo:なぜか２かいも走る
        // 現在ログイン中のユーザーの飲みにする
        // Todo:AppServiceProviderでは本来、Authは使えないが無理やり使っている。
        // ミドルウェアでの実行に帰るべきhttps://stackoverflow.com/questions/37372357/laravel-how-to-get-current-user-in-appserviceprovider
        view()->composer('*', function ($view) {
            $twitterAccounts = [];
            if (Auth::check()) {
                $twitterAccounts = Auth::user()->twitterAccount()->get();
                if (count($twitterAccounts) > 0) {
                    if (empty(session('twitter_account_id'))) {
                        // 初期選択は０番目のアカウントにしておく
                        session()->put('twitter_account_id', $twitterAccounts[0]->id);
                    }
                }
            }
            view()->share('twitterAccounts', $twitterAccounts);
        });
    }
}
