<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TwitterAuth;
use App\Services\TwitterAccountObject;
use App\TwitterAccount;
use Illuminate\Support\Facades\Auth;


class TwitterAccountController extends Controller
{
    // システムにTwitterアカウントを追加する
    public function add()
    {
        // 登録可能なアカウントを制限する
        $max_account = 10;
        
        $authUrl = TwitterAuth::getAuthorizeUrl();
        return redirect($authUrl);

        // todo:アカウント上限
        
        // if (Auth::user()->accounts()->count() >= $max_account) {
        //     // １ユーザーが登録できるアカウント数に上限を設ける
        //     return redirect()->route('mypage.monitor')->with('flash_message_error', '登録できるアカウントは'.$max_account.'個までです。');
        // } else {
        //     try {
        //         $authUrl = TwitterAuth::getAuthorizeUrl();
        //         return redirect($authUrl);
        //     } catch (Exception $e) {
        //         logger()->error($e);
        //         return redirect()->route('mypage.monitor')->with('flash_message_error', '現在、アカウントが追加できません。しばらく立ってから再度お試しください。');
        //     }
        // }
    }

    // Twitterの連携のときに、Twitterから呼ばれるコールバック関数
    public function callback()
    {
        $accessToken = TwitterAuth::getAccessToken();
        if (!$accessToken) {
            // アプリの認証をキャンセルした場合
            return redirect()->route('tweetlist.show')->with('flash_message_error', 'アカウントを追加できませんでした。');
        }
  
        $twitter_user_id = $accessToken['user_id'];
        $account = TwitterAccount::where('twitter_user_id', $twitter_user_id)->get();
  
        if (count($account) > 0 && $account[0]['user_id'] !== Auth::id()) {
            // すでにTwitterアカウントが他のユーザーによって登録済みの場合は不可
            return redirect()->route('mypage.monitor')->with('flash_message_error', 'Twitterアカウントが他のユーザにより登録済みのため、登録できませんでした。');
        } else {
            try {
                $accessTokenStr = json_encode($accessToken);
  
                $twitterAccount = new TwitterAccountObject($accessTokenStr);
                $twitterAccountInfo = $twitterAccount->getMyAccountInfo();
                $screen_name = $twitterAccountInfo['screen_name'];
                $image_url = $twitterAccountInfo['profile_image_url_https'];
              
                $msg = '';
                if (count($account) > 0) {
                    $msg = 'すでに登録されたアカウントです。';
                } else {
                    $msg = 'Twitterアカウントの登録に成功しました。自動化するためには「設定」を行いましょう！';
                }
  
                // accounts：アカウント情報管理用。行がなければINSERT。行があればUPDATE（アクセストークン切れ等の場合更新が必要だから）
                // account_settings：アカウントの設定管理用。行がなければINSERT。行があれば何もしない
                // operation_statuses：アカウントの稼働状況管理よう。行がなければINSERT。行があれば何もしない
                $account = TwitterAccount::updateOrCreate(['twitter_user_id' => $twitter_user_id], ['access_token' => $accessTokenStr,'user_id' => Auth::id(),'screen_name' => $screen_name, 'image' => $image_url]);
                $account = TwitterAccount::updateOrCreate(['twitter_user_id' => $twitter_user_id], ['access_token' => $accessTokenStr,'user_id' => Auth::id(),'screen_name' => $screen_name, 'image' => $image_url]);
      
                return redirect()->route('tweetlist.show')->with('flash_message_success', $msg);
            } catch (Exception $e) {
                logger()->error($e);
                return redirect()->route('tweetlist.show')->with('flash_message_error', '現在、アカウントが追加できません。しばらく立ってから再度お試しください。');
            }
        }
    }
}
