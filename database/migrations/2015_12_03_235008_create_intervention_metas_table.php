<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervention_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('intervention_id')->unsigned();
            $table->foreign('intervention_id')->references('id')->on('interventions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('key');
            $table->string('value')->nullable();
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
        Schema::drop('intervention_metas');
    }
}
