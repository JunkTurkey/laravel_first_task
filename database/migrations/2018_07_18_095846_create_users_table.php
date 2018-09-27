<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('email', 30);
            $table->string('password', 60);
            $table->unsignedInteger('role');
            $table->unsignedInteger('picture_id')->nullable();
            $table->timestamps();
        });
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->text('mail');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('picture', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture_path');
            $table->timestamps();
        });
        Schema::table('mails', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('users', function (Blueprint $table){
            $table->foreign('role')->references('id')->on('roles');
            $table->foreign('picture_id')->references('id')->on('picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mails', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['picture_id']);
            $table->dropForeign(['role']);
        });
        Schema::dropIfExists('mails');
        Schema::dropIfExists('picture');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
}
