<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('headquarters_id')->unsigned();
            $table->string('name')->unique();
            $table->string('gps_lat');
            $table->string('gps_long');
            $table->timestamps();
        });

        Schema::base('support_centers', function(Blueprint $table) {
            $table->foreign('headquarters_id')->references('id')->on('headquarters')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('support_centers');
    }
}
