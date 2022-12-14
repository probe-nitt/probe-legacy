<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('department');
            $table->enum('yos', [1,2,3,4,5]);
            $table->string('college_name');
            $table->bigInteger('phone_no');
            $table->boolean('mail_verified')->default(0);
            $table->boolean('acco_needed');
            $table->string('mail_confirmation_hash');
            $table->string('forgot_password_hash');
            $table->string('probe_id')->unique()->default(NULL);

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
        Schema::drop('users');
    }
}