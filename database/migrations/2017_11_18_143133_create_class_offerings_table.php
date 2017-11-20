<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_offerings', function (Blueprint $table) {
            $table->foreign('subject_id')->references('id')->on('subject_offerings');
            $table->integer('subject_id')->unsigned();
            $table->increments('id');
            $table->string('academic_year');
            $table->enum('semester', array('First Semester', 'Second Semester'));
            $table->enum('day', array('M', 'T', 'W', 'TH', 'F', 'M TH', 'T F'));
            $table->enum('type', array('Lec', 'Lab'));
            $table->string('room');
            $table->time('start_time');
            $table->time('end_time');
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
        Schema::dropIfExists('class_offerings');
    }
}
