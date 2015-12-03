<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crisis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('begin_date');
            $table->date('end_date')->nullable();
            $table->enum('type', ['natural_disaster', 'attack']);
            $table->string('location');
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
        Schema::drop('crisis');
    }
}
