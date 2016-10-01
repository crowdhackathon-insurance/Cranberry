<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        // $this->call('UsersTableSeeder');
         $this->call(CustomerTableSeeder::class);
         $this->call(StatusTableSeeder::class);
         $this->call(SourceTableSeeder::class);
         
         //utilized by customerTableSeeder
         //$this->call(IssueTableSeeder::class);
         $this->call(ContractTableSeeder::class);
         $this->call(VehicleTableSeeder::class);
         $this->call(ScheduleTableSeeder::class);
         $this->call(Vehicles_gpsTableSeeder::class);
         $this->call(Vehicles_issuesTableSeeder::class);
         Model::reguard();
    }
}
