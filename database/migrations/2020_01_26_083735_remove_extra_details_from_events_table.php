<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveExtraDetailsFromEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function($table) {
            $table->dropColumn('event_start_time');
            $table->dropColumn('event_end_time');
            $table->dropColumn('event_date');
            $table->dropColumn('event_venue');
            $table->dropColumn('event_desc');
            $table->dropColumn('event_contact_name');
            $table->dropColumn('event_contact');
            $table->dropColumn('event_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function($table) {
            $table->time('event_start_time')->nullable();
            $table->time('event_end_time')->nullable();
            $table->date('event_date')->nullable();
            $table->string('event_venue')->nullable();
            $table->text('event_desc')->nullable();
            $table->string('event_contact_name')->nullable();
            $table->string('event_contact')->nullable();
            $table->integer('event_day')->nullable();
        });
    }
}
