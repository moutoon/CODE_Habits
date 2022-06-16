<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('記事のタイトル');
            $table->text('body')->comment('記事の本文');
            $table->foreignId('user_id')->comment('記事を投稿したユーザーのID');
            $table->date('start_day')->comment('学習を始めた日');
            $table->date('end_day')->comment('学習を修了した日');
            $table->integer('today_time')->comment('今日の学習時間');
            $table->integer('total_time')->comment('今までの学習時間の累計');
            $table->integer('total_days')->comment('今までの学習日数の累計');
            $table->integer('running_days')->comment('学習を継続した日数');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
