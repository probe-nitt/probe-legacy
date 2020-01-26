<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->date('date')->nullable();
            $table->string('venue')->nullable();
            $table->text('desc')->nullable();
            $table->integer('day')->nullable();
            $table->string('type')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact')->nullable();
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
        Schema::dropIfExists('schedule');
    }
}
