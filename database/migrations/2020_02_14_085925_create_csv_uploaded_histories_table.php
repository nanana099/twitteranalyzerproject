<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsvUploadedHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_uploaded_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_name');
            $table->unsignedBigInteger('twitter_account_id');
            $table->dateTime('uploaded_at');

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
        Schema::dropIfExists('csv_uploaded_histories');
    }
}
