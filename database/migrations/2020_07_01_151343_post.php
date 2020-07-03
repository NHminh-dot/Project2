<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->text('content');
            $table->timestamp('created_at');
            $table->integer('created_by')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('status');
            $table->timestamp('updated_at')->nullable();
            $table->integer('upvote');
            $table->integer('downvote');
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('created_by')->references('id')->on('user');
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
