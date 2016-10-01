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
         $this->call(StatusTableSeeder::class);
         $this->call(SourceTableSeeder::class);
        // $this->call('UsersTableSeeder');
         $this->call(CustomerTableSeeder::class);


         //utilized by customerTableSeeder
         //$this->call(IssueTableSeeder::class);
         $this->call(ContractTableSeeder::class);
         $this->call(VehicleTableSeeder::class);
         $this->call(ScheduleTableSeeder::class);
         $this->call(Vehicle_gpsTableSeeder::class);
         $this->call(Vehicle_issuesTableSeeder::class);

    }
}
