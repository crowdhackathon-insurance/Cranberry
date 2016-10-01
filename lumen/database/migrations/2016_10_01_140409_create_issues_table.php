<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer')->unsigned();
            $table->string('location');
            $table->string('garage');
            $table->string('files')->nullable();
            $table->string('type');
            $table->string('contactDetails');
            $table->integer('status')->unsigned();//status of issue
            $table->integer('source')->nullable()->unsigned();
            $table->string('comment')->nullable();
            $table->timestamps();

            $table->foreign('customer')->references('id')->on('customers');
            $table->foreign('status')->references('id')->on('statuses');
            $table->foreign('source')->references('id')->on('sources');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('issues');
    }
}
