<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('code', 25);
            $table->text('description');
            $table->timestamps();
        });
        Schema::create('Staff_Course', function (Blueprint $table) {
            $table->unsignedInteger('Course');
            $table->foreign('Course')->references('id')->on('Course');
            $table->unsignedInteger('User');
            $table->foreign('User')->references('id')->on('User');
            $table->string('role');
        });
        Schema::create('Student_Course', function (Blueprint $table) {
            $table->unsignedInteger('Course');
            $table->foreign('Course')->references('id')->on('Course');
            $table->unsignedInteger('Student');
            $table->foreign('Student')->references('id')->on('Student');
            $table->unsignedInteger('Supervisor')->nullable();
            $table->foreign('Supervisor')->references('id')->on('User');
            $table->unsignedInteger('SecondMarker')->nullable();
            $table->foreign('SecondMarker')->references('id')->on('User');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Staff_Course');
        Schema::dropIfExists('Student_Course');
        Schema::dropIfExists('Course');
    }

}
