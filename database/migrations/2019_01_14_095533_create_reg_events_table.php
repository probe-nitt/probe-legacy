<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_name');
            $table->integer('participant1')->unsigned();
            $table->integer('participant2')->unsigned();
            $table->integer('participant3')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->foreign('participant1')->references('id')->on('users');
            $table->foreign('participant2')->references('id')->on('users')->default(NULL);
            $table->foreign('participant3')->references('id')->on('users')->default(NULL);
            $table->foreign('event_id')->references('id')->on('events');
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
