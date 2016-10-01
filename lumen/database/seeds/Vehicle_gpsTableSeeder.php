<?php

use Illuminate\Database\Seeder;

class Vehicle_gpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Vehicle_gps::class, 50)->create();
    }
}
