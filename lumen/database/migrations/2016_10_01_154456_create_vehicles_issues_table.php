<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles_issues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle')->unsigned();
            $table->integer('issue')->unsigned();
            $table->timestamps();

            $table->foreign('vehicle')->references('id')->on('vehicles');
            $table->foreign('issue')->references('id')->on('issues');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicles_issues');
    }
}
