<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('Staff', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->string('role',20);
        });
        Schema::create('User_Staff', function(Blueprint $table) {
            $table->unsignedInteger('Staff');
            $table->foreign('Staff')->references('id')->on('Staff');
            $table->unsignedInteger('User');
            $table->foreign('User')->references('id')->on('User');
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
        Schema::dropIfExists('User_Staff');
        Schema::dropIfExists('Staff');
	}

}
