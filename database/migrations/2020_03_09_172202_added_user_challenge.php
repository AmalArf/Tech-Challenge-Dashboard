<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedUserChallenge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_challenge', function (Blueprint $table) {
            $table->integer('user_id');
          //  $table->foreign('user_id')->references('id_user')->on('users');
            $table->integer('challenge_id');
            //$table->foreign('challenge_id')->references('id_challenge')->on('challenges');
           // $table->primary(['user_id', 'challenge_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
