<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer')->unsigned();
            $table->string('contractNumber');
            $table->string('vehicleType');//vehicle type
            $table->string('vehicleColor');
            $table->string('vehicleManufacturer');
            $table->string('licensePlate');
            $table->string('contractStart');
            $table->string('contractEnd');
            $table->timestamps();

            $table->foreign('customer')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contracts');
    }
}
