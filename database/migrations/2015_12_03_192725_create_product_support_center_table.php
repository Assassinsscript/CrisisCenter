<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSupportCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_suport_center', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('support_center_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('product_suport_center', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('support_center_id')->references('id')->on('support_centers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_suport_center');
    }
}
