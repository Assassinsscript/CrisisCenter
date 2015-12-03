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
            $table->string('phone1');
            $table->string('phone2');
            $table->enum('blood_type', ['O-', 'A-', 'AB-', 'B-', 'B+', 'AB+', 'A+', 'O+']);
            $table->date('birth_date');
            $table->text('contraindication');
            $table->integer('support_center_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('victims', function(Blueprint $table){
            $table->foreign('support_center_id')->references('id')->on('support_centers')->onCreate('cascade')->onDelete('cascade');
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
