<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetListRowSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet_list_row_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tweet_property_definition_id');
            $table->integer('order');
            $table->unsignedBigInteger('user_id');

            $table->foreign('tweet_property_definition_id')->references('id')->on('tweet_property_definitions');
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
        Schema::dropIfExists('tweet_list_row_settings');
    }
}
