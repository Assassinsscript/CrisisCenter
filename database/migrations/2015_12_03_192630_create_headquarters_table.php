<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadquartersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headquarters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crisis_id')->unsigned();
            $table->string('name');
            $table->string('gps_lat');
            $table->string('gps_long');
            $table->timestamps();
        });

        Schema::base('headquarters', function(Blueprint $table) {
            $table->foreign('crisis_id')->references('id')->on('crisis')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('headquarters');
    }
}
