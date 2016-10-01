<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
		 DB::table('statuses')->insert(['label' => 'Pending']);
		 DB::table('statuses')->insert(['label' => 'Accepted']);
		 DB::table('statuses')->insert(['label' => 'Verification Required']);
		 DB::table('statuses')->insert(['label' => 'Cancelled']);
		 DB::table('statuses')->insert(['label' => 'Completed']);
    }
}
