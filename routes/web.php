<?php

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

// ログインが不要なルート
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('mypage.monitor');
    } else {
        return view('welcome');
    }
});

// ログインが必要なルート
Route::middleware(['auth'])->group(function () {
    // TwitterAPIのコールバック
    Route::get('account/callback', 'TwitterAccountController@callback');  
    // ツイートデータ読み込み画面
    Route::get('registtweet/show', 'RegistTweetController@show');  
    // ツイートデータ読み込み画面からの更新
    Route::post('registtweet/post', 'RegistTweetController@upsert');  
    // ツイート一覧画面
    Route::get('tweets/show', 'TweetListController@show');  
    // 単語解析画面
    Route::get('words/show', 'WordAnalyzerController@show');  
});
