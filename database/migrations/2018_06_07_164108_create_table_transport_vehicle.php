<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransportVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_transport_vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transport_id');
            $table->integer('brand_id');
            $table->integer('brand_type_id');
            $table->integer('year');
            $table->integer('seats');
            $table->bigInteger('shuttle_price');
            $table->bigInteger('full_day_price');
            $table->bigInteger('half_day_price');
            $table->bigInteger('driver_price');
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
        Schema::dropIfExists('trip_transport_vehicle');
    }
}
