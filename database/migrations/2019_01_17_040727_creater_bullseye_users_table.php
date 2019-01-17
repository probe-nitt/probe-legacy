<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaterBullseyeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bullseye_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('participant')->unsigned();
            $table->integer('cl')->unsigned();
            $table->boolean('complete')->default(0);
            $table->foreign('participant')->references('id')->on('users');
            $table->foreign('cl')->references('level')->on('bullseye_data');
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
