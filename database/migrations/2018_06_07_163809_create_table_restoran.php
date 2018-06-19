<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRestoran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_restaurant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('restaurant_name');
            $table->integer('restaurant_type_id');
            $table->string('province_id');
            $table->string('regency_id');
            $table->text('address');
            $table->string('phone');
            $table->string('pic');
            $table->string('pic_phone');
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
        Schema::dropIfExists('trip_restaurant');
    }
}
