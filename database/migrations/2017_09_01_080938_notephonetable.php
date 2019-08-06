<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notephonetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notephone', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('namenote');
            $table->string('phoneback');
            $table->string('fromnote');
            $table->string('districts_id');
            $table->string('amphures_id');
            $table->string('provinces_id');
            $table->string('story');
            $table->string('note');
            $table->string('notepad');
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
        Schema::dropIfExists('notephone');
    }
}
