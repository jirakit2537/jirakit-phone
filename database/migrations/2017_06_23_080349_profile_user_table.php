<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profiles', function(Blueprint $table)
       {
           $table->increments('id');
         $table->integer('user_id')->unsigned()->nullable();
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         $table->string('name');
          $table->integer('provinces_id');
            $table->integer('amphures_id');
              $table->integer('districts_id');
         $table->string('telephone');
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
Schema::dropIfExists('profiles');
    }
}
