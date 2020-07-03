<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportedPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reported_post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('create_by')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->timestamp('created_at');
            $table->text('description');
            $table->foreign('create_by')->references('id')->on('user');
            $table->foreign('post_id')->references('id')->on('post');
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
        Schema::dropIfExists('reported_post');
    }
}
