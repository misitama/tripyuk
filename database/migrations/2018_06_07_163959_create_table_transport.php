<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_transport', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transport_name');
            $table->text('address');
            $table->string('phone');
            $table->string('pic_name');
            $table->string('pic_phone_number');
            $table->integer('province_id');
            $table->integer('regency_id');
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
        Schema::dropIfExists('trip_transport');
    }
}
