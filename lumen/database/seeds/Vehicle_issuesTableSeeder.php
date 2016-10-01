<?php

use Illuminate\Database\Seeder;

class Vehicle_issuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Vehicle_issue::class, 50)->create();
    }
}
