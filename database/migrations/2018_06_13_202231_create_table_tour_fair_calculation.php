<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTourFairCalculation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_fair_calculation', function (Blueprint $table) {
            $table->increments('id');
            $table->date('validity_period');
            $table->boolean('is_variable_cost');
            $table->enum('item_category',['Local Transport','Crew','Miscellanious','Transport','Accomodation','Meals','Souvenir','Insurance','Guide & Driving Tipping']);
            $table->enum('item_mode',['Offline','Live API']);
            $table->string('item_name')->nullable();
            $table->integer('item_reference_id')->nullable();
            $table->bigInteger('price');
            $table->integer('qty');
            $table->bigInteger('sub_total');
            $table->integer('profit_percent');
            $table->bigInteger('profit_idr');
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
        Schema::dropIfExists('tour_fair_calculation');
    }
}
