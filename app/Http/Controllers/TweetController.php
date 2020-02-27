<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;


class TweetController extends Controller
{
    
    public function get(Request $request){
        $query = Tweet::query();
        $sort  = $request->input('sort');

        if($sort === "0"){
            $query->orderBy('posted_at','DESC');
        }else if($sort === "1"){
            $query->orderBy('impression_num','DESC');
        }else if($sort === "2"){
            $query->orderBy('engage_num','DESC');
        }else if($sort === "3"){
            $query->orderBy('engage_rate','DESC');
        }else if($sort === "4"){
            $query->orderBy('retweet_num','DESC');
        }else if($sort === "5"){
            $query->orderBy('reply_num','DESC');
        }else if($sort === "6"){
            $query->orderBy('like_num','DESC');
        }else if($sort === "7"){
            $query->orderBy('prof_click_num','DESC');
        }else if($sort === "8"){
            $query->orderBy('detail_click_num','DESC');
        }else if($sort === "9"){
            $query->orderBy('fixed_link_click_num','DESC');
        }else if($sort === "10"){
            $query->orderBy('app_show_num','DESC');
        }else if($sort === "11"){
            $query->orderBy('app_inst_num','DESC');
        }else if($sort === "12"){
            $query->orderBy('following_num','DESC');
        }else if($sort === "13"){
            $query->orderBy('tweet_mail_num','DESC');
        }else if($sort === "14"){
            $query->orderBy('dial_tel_num','DESC');
        }else if($sort === "15"){
            $query->orderBy('media_play_num','DESC');
        }else if($sort === "16"){
            $query->orderBy('medhi_engage_num','DESC');
        }
        
        $pageNum = 100;
        $tweets = $query->paginate($pageNum);
        return response()->json($tweets);
    }
}
