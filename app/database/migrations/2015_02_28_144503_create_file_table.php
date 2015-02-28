<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('File', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->unsignedInteger('Uploader');
            $table->foreign('Uploader')->references('id')->on('User');
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
        Schema::dropIfExists('File');
    }

}
