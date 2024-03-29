<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    
    protected $fillable = ["twitter_tweet_id",
                        "content",
                        "posted_at",
                        "twitter_account_id",
                        "impression_num",
                        "engage_num",
                        "engage_rate",
                        "retweet_num",
                        "retweet_rate",
                        "reply_num",
                        "reply_rate",
                        "like_num",
                        "like_rate",
                        "prof_click_num",
                        "prof_click_rate",
                        "url_click_num",
                        "url_click_rate",
                        "hash_click_num",
                        "hash_click_rate",
                        "detail_click_num",
                        "detail_click_rate",
                        "fixed_link_click_num",
                        "fixed_link_click_rate",
                        "app_show_num",
                        "app_show_rate",
                        "app_inst_num",
                        "app_inst_rate",
                        "following_num",
                        "following_rate",
                        "tweet_mail_num",
                        "tweet_mail_rate",
                        "dial_tel_num",
                        "dial_tel_rate",
                        "media_play_num",
                        "media_play_rate",
                        "medhi_engage_num",
                        "medhi_engage_rate",
                        "promo_impression_num",
                        "promo_engage_num",
                        "promo_engage_rate",
                        "promo_retweet_num",
                        "promo_retweet_rate",
                        "promo_reply_num",
                        "promo_reply_rate",
                        "promo_like_num",
                        "promo_like_rate",
                        "promo_prof_click_num",
                        "promo_prof_click_rate",
                        "promo_url_click_num",
                        "promo_url_click_rate",
                        "promo_hash_click_num",
                        "promo_hash_click_rate",
                        "promo_detail_click_num",
                        "promo_detail_click_rate",
                        "promo_fixed_link_click_num",
                        "promo_fixed_link_click_rate",
                        "promo_app_show_num",
                        "promo_app_show_rate",
                        "promo_app_inst_num",
                        "promo_app_inst_rate",
                        "promo_following_num",
                        "promo_following_rate",
                        "promo_tweet_mail_num",
                        "promo_tweet_mail_rate",
                        "promo_dial_tel_num",
                        "promo_dial_tel_rate",
                        "promo_media_play_num",
                        "promo_media_play_rate",
                        "promo_medhi_engage_num",
                        "promo_medhi_engage_rate"]; 
}
