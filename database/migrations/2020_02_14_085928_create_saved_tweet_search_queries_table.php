<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavedTweetSearchQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved_tweet_search_queries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('query_set_id');
            $table->unsignedBigInteger('tweet_search_query_definition_id');
            $table->string('param')->nullable();
            $table->unsignedBigInteger('user_id');

            $table->foreign('tweet_search_query_definition_id')->references('id')->on('tweet_search_query_definitions')->name("saved_tweet_search_queries_foreign");;
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
        Schema::dropIfExists('saved_tweet_search_queries');
    }
}
