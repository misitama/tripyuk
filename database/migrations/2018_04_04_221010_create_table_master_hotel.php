<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterHotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_master_hotel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotel_logo');
            $table->string('hotel_name');
            $table->string('hotel_star');
            $table->string('hotel_longitude');
            $table->string('hotel_latitude');
            $table->string('hotel_address');
            $table->string('hotel_phone');
            $table->string('hotel_manager');
            $table->string('hotel_manager_phone');
            $table->string('hotel_email');
            $table->string('hotel_website');
            $table->string('hotel_description');
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
        Schema::dropIfExists('trip_hotel');
    }
}
