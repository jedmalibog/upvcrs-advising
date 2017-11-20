<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subjects', function (Blueprint $table) {
            $table->foreign('subject_id')->references('subject_id')->on('class_offerings');
            $table->integer('subject_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users');
            $table->integer('student_id')->unsigned();
            $table->increments('id');
            $table->enum('grade', array('1.0', '1.25', '1.5', '1.75', '2.0', '2.25', '2.5', '2.75', '3.0', '4.0', '5.0'));
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
        Schema::dropIfExists('student_subjects');
    }
}
