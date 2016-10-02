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
		 DB::table('statuses')->insert(['label' => 'Αναμονή']);
		 DB::table('statuses')->insert(['label' => 'Επιβεβαίωση']);
		 DB::table('statuses')->insert(['label' => 'Σε εξέλιξη']);
		 DB::table('statuses')->insert(['label' => 'Ακύρωση']);
		 DB::table('statuses')->insert(['label' => 'Ολοκλήρωση']);
    }
}
