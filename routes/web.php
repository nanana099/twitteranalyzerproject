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

// 認証系
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('registtweet.show');
    } else {
        return view('welcome');
    }
});


// ６．連絡
Route::get('contact/inquiry/show', 'ContactController@showInquiry')->name('inquiry.show');       // お問い合わせ
Route::post('contact/inquiry/show', 'ContactController@postInquiry')->name('inquiry.post');       // お問い合わせ
Route::get('contact/opinion/show', 'ContactController@showOpiniton');       // ご意見・ご要望
// ８．プレーンテキスト
Route::get('plane/rule/show', 'PlaneTextController@showRule')->name('rule.show'); ;              // 利用規約
Route::get('plane/tokusho/show', 'PlaneTextController@showTokusho')->name('tokusho.show'); ;        // 特商
Route::get('plane/privacy/show', 'PlaneTextController@showPrivacyPolicy')->name('privacy.show'); ;        // プライバシーポリシー

// ログインが必要なルート
Route::middleware(['auth'])->group(function () {
    // １．Twitterアカウントの登録
    Route::get('twitteraccount/callback', 'TwitterAccountController@callback'); // TwitterAPIからのコールバック
    // ２．ツイートデータ読み込み画面
    Route::get('registtweet/show', 'RegistTweetController@show')->name('registtweet.show'); // ツイートデータ登録画面を表示
    Route::post('registtweet/post', 'RegistTweetController@upsert');            // ツイートデータを更新
    // ３．過去のツイート一覧画面
    Route::get('tweetlist/show', 'TweetListController@show')->name('tweetlist.show');                   //過去ツイート一覧を表示
    // ４．分析画面
    Route::get('analytics/show', 'AnalyticsController@show')->name('analytics.show');                   // 分析画面表示
    // ５．設定
    Route::get('setting/account/show', 'SettingController@showAccount');        // アカウント設定
    Route::get('setting/screen/show', 'SettingController@showScreen');          // 画面設定
    Route::get('setting/twitteraccount/show', 'SettingController@showTwitterAccount');  // ツイッターアカウント設定
    Route::get('setting/notify/show', 'SettingController@showNotify');          // 通知設定
    Route::get('setting/plan/show', 'SettingController@showPlan');              // プラン設定
    // ７．ヘルプ関連
    Route::get('help/qa/show', 'HelpController@showQA');                        // QA画面
    Route::get('help/example/show', 'HelpController@showExample');              // 使い方の例
});
