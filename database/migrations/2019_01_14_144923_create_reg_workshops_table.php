<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_workshops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('participant1')->unsigned();
            $table->integer('participant2')->unsigned()->nullable();
            $table->integer('participant3')->unsigned()->nullable();
            $table->integer('workshop_id')->unsigned();
            $table->boolean('paid')->default(0);
            $table->foreign('participant1')->references('id')->on('users');
            $table->foreign('participant2')->references('id')->on('users');
            $table->foreign('participant3')->references('id')->on('users');
            $table->foreign('workshop_id')->references('id')->on('workshops');
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
        //
    }
}
