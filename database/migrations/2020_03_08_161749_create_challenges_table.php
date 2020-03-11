<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->integer('id_challenge')->autoIncrement();
            $table->integer('id_organizer');
             $table->string('title');
             $table->string('status');
             $table->string('description');
             $table->date('startDate')->nullable(false);
             $table->date('finishDate')->nullable(false);
             $table->timestamps();
            $table->foreign('id_organizer')->unsigned()->references('id_organizer')->on('organizers');;
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenges');
    }
}
