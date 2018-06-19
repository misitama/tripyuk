<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->string('full_name',50);
            $table->string('email',120);
            $table->string('password');
            $table->string('phone',15)->nullable();
            $table->string('mobile_phone',15)->nullable();
            $table->text('address')->nullable();
            $table->enum('sex',['Male','Female','Other']);
            $table->integer('province_id')->nullable();
            $table->integer('regency_id')->nullable();
            $table->integer('district_id')->nullable();

            $table->string('activation_key')->nullable();
            $table->dateTime('last_visit_datetime')->nullable();
            $table->dateTime('register_datetime')->nullable()->default(null);
            $table->boolean('is_blocked')->default(0);
            $table->integer('reset_count')->default(0);
            $table->dateTime('last_reset_datetime')->nullable()->default(null);
            $table->boolean('is_active')->default(0);

            $table->string('created_by');
            $table->string('last_modified_by');
            
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
        Schema::dropIfExists('trip_user');
    }
}
