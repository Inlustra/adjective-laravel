<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreeTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Degree', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->unsignedInteger('Director');
            $table->foreign('Director')->references('id')->on('User');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Degree');
    }

}
