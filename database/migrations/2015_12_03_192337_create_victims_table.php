<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVictimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('victims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('firs_name');
            $table->string('gender');
            $table->string('address');
            $table->integer('postal_code');
            $table->string('city');
            $table->string('country');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->enum('blood_type', ['O-', 'A-', 'AB-', 'B-', 'B+', 'AB+', 'A+', 'O+']);
            $table->date('birth_date');
            $table->text('contraindication');
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
        Schema::drop('victims');
    }
}
