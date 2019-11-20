<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSesi6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesi6', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('ans1')->nullable();
            $table->string('ans2')->nullable();
            $table->string('ans3')->nullable();
            $table->string('ans4')->nullable();
            $table->string('ans5')->nullable();
            $table->string('ans6')->nullable();
            $table->string('ans7')->nullable();
            $table->string('ans8')->nullable();
            $table->string('ans9')->nullable();
            $table->string('ans10')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('sesi6');
    }
}
