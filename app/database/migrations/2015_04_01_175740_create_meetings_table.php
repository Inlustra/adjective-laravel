<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Meeting', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Student');
            $table->foreign('Student')->references('id')->on('User');
            $table->unsignedInteger('Staff');
            $table->foreign('Staff')->references('id')->on('User');
            $table->unsignedInteger('Course');
            $table->foreign('Course')->references('id')->on('Course');
            $table->dateTime('time');
            $table->boolean('accepted_student')->default(false);
            $table->boolean('accepted_staff')->default(false);
            $table->boolean('held')->default(false);
            $table->text('agenda');
            $table->text('minutes');
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
        Schema::dropIfExists('Meeting');
    }


}
