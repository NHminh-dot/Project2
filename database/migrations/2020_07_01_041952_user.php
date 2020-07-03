<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50);
            $table->string('login_name', 50);
            $table->string('password', 50);
            $table->string('email', 50);
            $table->date('date_of_birth');
            $table->text('biography')->nullable();
            $table->integer('status')->default(1);
            $table->timestamp('created_at');
            $table->timestamp('last_time_login')->nullable();
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('role');
            $table->unique(['username', 'login_name', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
