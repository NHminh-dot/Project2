<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FollowedCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followed_category', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['user_id', 'category_id']);
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('category_id')->references('id')->on('category');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followed_category');
    }
}
