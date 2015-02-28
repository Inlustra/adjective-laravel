<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeadlineTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Deadline', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->unsignedInteger('Course');
            $table->foreign('Course')->references('id')->on('Course');
            $table->dateTime('date');
            $table->string('filetypes')->nullable();
            $table->boolean('active');
            $table->timestamps();
        });
        Schema::create('Deadline_File', function (Blueprint $table) {
            $table->unsignedInteger('Deadline');
            $table->foreign('Deadline')->references('id')->on('Deadline');
            $table->unsignedInteger('File');
            $table->foreign('File')->references('id')->on('File');
        });
        Schema::create('Deadline_Submission', function (Blueprint $table) {
            $table->unsignedInteger('Deadline');
            $table->foreign('Deadline')->references('id')->on('Deadline');
            $table->unsignedInteger('File');
            $table->foreign('File')->references('id')->on('File');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Deadline_Submission');
        Schema::dropIfExists('Deadline_File');
        Schema::dropIfExists('Deadline');
    }

}
