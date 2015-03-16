<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('Conversation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Course');
            $table->foreign('Course')->references('id')->on('Course');
            $table->timestamps();
        });

        Schema::create('Conversation_User', function (Blueprint $table) {
            $table->unsignedInteger('Conversation')->index();
            $table->foreign('Conversation')->references('id')->on('Conversation');
            $table->unsignedInteger('User')->index();
            $table->foreign('User')->references('id')->on('User');
            $table->primary(['Conversation', 'User']);
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
        Schema::dropIfExists('Conversation_User');
        Schema::dropIfExists('Conversation');
	}

}
