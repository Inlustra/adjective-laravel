<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('Student', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Degree');
            $table->foreign('Degree')->references('id')->on('Degree');
            $table->unsignedInteger('User');
            $table->foreign('User')->references('id')->on('User');
            $table->dateTime('graduating');
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
        Schema::dropIfExists('Student');
	}

}
