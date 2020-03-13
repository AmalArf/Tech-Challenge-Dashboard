<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->integer('id_user');
            $table->integer('id_challenge');


            $table->foreign('id_user')->unsigned()->references('id')->on('users');
            $table->foreign('id_challenge')->unsigned()->references('id_challenge')->on('challenges');

            $table->primary(['id_user', 'id_challenge']);
            $table->string('code');
            $table->boolean('winner');
            $table->timestamps();
        });
    }
    // public function user()
    // {
    //     return $this->hasOne('App\user');
    // }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result');
    }
}
