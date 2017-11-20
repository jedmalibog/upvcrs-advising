<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_offerings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->text('desc');
            $table->enum('type', array('major', 'minor'));
            $table->enum('cluster', array('AH', 'MST', 'SSP'))->nullable();
            $table->enum('credits', array('1.0', '2.0', '3.0', '4.0', '5.0'));
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
        Schema::dropIfExists('subject_offerings');
    }
}
