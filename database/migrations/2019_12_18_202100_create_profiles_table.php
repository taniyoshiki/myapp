<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // title と body と image_path を追記
    public function up()
    {
        Schema::create('Profiles', function (Blueprint $table) {
            $table->bigIncrements('name');
            $table->string('gender')->nullable(); // ニュースのタイトルを保存するカラム
            $table->string('hoby')->nullable();  // ニュースの本文を保存するカラム
            $table->string('introduction')->nullable();  // 画像のパスを保存するカラム
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
        Schema::dropIfExists('news');
    }
}