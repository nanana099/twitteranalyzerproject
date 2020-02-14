<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('twitter_tweet_id');
            $table->string('content');
            $table->dateTime('posted_at');
            $table->unsignedBigInteger('twitter_account_id');
            $table->float('impression_num');
            $table->float('engage_num');
            $table->float('engage_rate');
            $table->float('retweet_num');
            $table->float('retweet_rate');
            $table->float('reply_num');
            $table->float('reply_rate');
            $table->float('like_num');
            $table->float('like_rate');
            $table->float('prof_click_num');
            $table->float('prof_click_rate');
            $table->float('url_click_num');
            $table->float('url_click_rate');
            $table->float('hash_click_num');
            $table->float('hash_click_rate');
            $table->float('detail_click_num');
            $table->float('detail_click_rate');
            $table->float('fixed_link_click_num');
            $table->float('fixed_link_click_rate');
            $table->float('app_show_num');
            $table->float('app_show_rate');
            $table->float('app_inst_num');
            $table->float('app_inst_rate');
            $table->float('following_num');
            $table->float('following_rate');
            $table->float('tweet_mail_num');
            $table->float('tweet_mail_rate');
            $table->float('dial_tel_num');
            $table->float('dial_tel_rate');
            $table->float('media_play_num');
            $table->float('media_play_rate');
            $table->float('medhi_engage_num');
            $table->float('medhi_engage_rate');
            $table->float('promo_impression_num')->nullable();
            $table->float('promo_engage_num')->nullable();
            $table->float('promo_engage_rate')->nullable();
            $table->float('promo_retweet_num')->nullable();
            $table->float('promo_retweet_rate')->nullable();
            $table->float('promo_reply_num')->nullable();
            $table->float('promo_reply_rate')->nullable();
            $table->float('promo_like_num')->nullable();
            $table->float('promo_like_rate')->nullable();
            $table->float('promo_prof_click_num')->nullable();
            $table->float('promo_prof_click_rate')->nullable();
            $table->float('promo_url_click_num')->nullable();
            $table->float('promo_url_click_rate')->nullable();
            $table->float('promo_hash_click_num')->nullable();
            $table->float('promo_hash_click_rate')->nullable();
            $table->float('promo_detail_click_num')->nullable();
            $table->float('promo_detail_click_rate')->nullable();
            $table->float('promo_fixed_link_click_num')->nullable();
            $table->float('promo_fixed_link_click_rate')->nullable();
            $table->float('promo_app_show_num')->nullable();
            $table->float('promo_app_show_rate')->nullable();
            $table->float('promo_app_inst_num')->nullable();
            $table->float('promo_app_inst_rate')->nullable();
            $table->float('promo_following_num')->nullable();
            $table->float('promo_following_rate')->nullable();
            $table->float('promo_tweet_mail_num')->nullable();
            $table->float('promo_tweet_mail_rate')->nullable();
            $table->float('promo_dial_tel_num')->nullable();
            $table->float('promo_dial_tel_rate')->nullable();
            $table->float('promo_media_play_num')->nullable();
            $table->float('promo_media_play_rate')->nullable();
            $table->float('promo_medhi_engage_num')->nullable();
            $table->float('promo_medhi_engage_rate')->nullable();

            $table->foreign('twitter_account_id')->references('id')->on('twitter_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
