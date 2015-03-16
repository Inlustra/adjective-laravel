<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrespondenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('Correspondence', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Sender');
            $table->foreign('Sender')->references('id')->on('User');
            $table->unsignedInteger('Conversation');
            $table->foreign('Conversation')->references('id')->on('Conversation');
            $table->text('message');
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
        Schema::dropIfExists('Correspondence');
	}

}
