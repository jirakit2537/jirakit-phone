<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsinputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statsinputs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('explace_id');
            $table->integer('wrapnumber');
            $table->integer('ka_count');
            $table->integer('ka_snumber');
            $table->integer('ka_endnumber');
            $table->integer('put_count');
            $table->integer('put_snumber');
            $table->integer('put_endnumber');
            $table->string('note');
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
        Schema::dropIfExists('statsinputs');
    }
}
