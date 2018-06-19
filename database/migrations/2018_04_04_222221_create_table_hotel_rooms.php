<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHotelRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_hotel_room', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_name');
            $table->integer('room_size');
            $table->bigInteger('net_rate');
            $table->text('description');
            $table->integer('bed_type_id');
            $table->integer('hotel_id');
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
        Schema::dropIfExists('trip_hotel_room');
    }
}
