<?php

use Illuminate\Database\Seeder;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 DB::table('sources')->insert(['label' => 'Application']);
		 DB::table('sources')->insert(['label' => 'Backend Manual']);
		 DB::table('sources')->insert(['label' => 'Third Party']);
		 DB::table('sources')->insert(['label' => 'N/A']);
		 DB::table('sources')->insert(['label' => 'Passenger Application']);
    }
}
