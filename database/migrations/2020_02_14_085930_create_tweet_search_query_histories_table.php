<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetSearchQueryHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet_search_query_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('query_set_id');
            $table->unsignedBigInteger('tweet_search_query_definition_id');
            $table->string('param')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('tweet_search_query_definition_id')->references('id')->on('tweet_search_query_definitions')->name('tweet_serach_query_histories_foreign');
            $table->foreign('user_id')->references('id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweet_search_query_histories');
    }
}
