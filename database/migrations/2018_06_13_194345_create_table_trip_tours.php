<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTripTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('trip_category_id');
            $table->integer('stay_day');
            $table->integer('stay_night');
            $table->date('date_validity');
            $table->boolean('is_domestic');
            $table->string('region');
            $table->string('country');
            $table->string('city');
            $table->text('itinerary');
            $table->text('term_condition');
            $table->bigInteger('price');
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('trip_tours');
    }
}
