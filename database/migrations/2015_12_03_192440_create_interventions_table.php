<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('victim_id')->unsigned();
            $table->enum('type', ['movement', 'medication', 'treatment', 'death', 'evacuation']);
            $table->timestamps();
        });

        Schema::table('interventions', function(Blueprint $table){
            $table->foreign('victim_id')->references('id')->on('victims')->onCreate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('interventions');
    }
}
