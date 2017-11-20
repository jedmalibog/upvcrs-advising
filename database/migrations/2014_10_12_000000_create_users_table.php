<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('password');
            $table->string('name');
            $table->date('bdate');
            $table->string('email');
            $table->bigInteger('phone_number');
            $table->string('degree_program');
            $table->string('degree_level');
            $table->enum('year_level', array('1st Year', '2nd Year', '3rd Year', '4th Year', 'Nth Year'));            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
