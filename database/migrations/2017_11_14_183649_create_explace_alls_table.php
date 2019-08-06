<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExplaceAllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explace_alls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hon_id');
            $table->integer('pak_id');
            $table->string('explace_type');
            $table->string('nikay_type');
            $table->string('สำนักเรียน');
            $table->integer('explace_code');
            $table->string('explace_name');
            $table->string('tambon_ex');
            $table->string('amphor_ex');
            $table->string('jangwat_ex');
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
        Schema::dropIfExists('explace_alls');
    }
}
