<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesGpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles_gps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle')->unsigned();
            $table->string('vehicleLocation');
            $table->timestamps();

            $table->foreign('vehicle')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicles_gps');
    }
}
