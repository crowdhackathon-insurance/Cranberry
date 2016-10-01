<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//     ];
// });

/*
$table->increments('id');
$table->string('email')->unique();
$table->string('password');
$table->rememberToken();
$table->string('firstName');
$table->string('lastName');
$table->string('primaryAddress');
$table->string('primaryPhone');
*/
$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'firstName' => $faker->firstName($gender = null|'male'|'female'),
        'lastName' => $faker->lastName,
        'primaryAddress' => $faker->address,
        'primaryPhone' => $faker->phoneNumber,
    ];
});

/*
$table->integer('customer')->unsigned();
$table->string('location');
$table->string('garage');
$table->string('files');
$table->string('type');
$table->string('contactDetails');
$table->integer('status')->unsigned();//status of issue
$table->integer('source')->nullable()->unsigned();
$table->string('comment')->nullable();
$table->timestamps();

$table->foreign('customer')->references('id')->on('customers');
$table->foreign('status')->references('id')->on('statuses');
$table->foreign('source')->references('id')->on('sources');
*/
$factory->define(App\Issue::class, function (Faker\Generator $faker) {
    return [
        'customer' => $faker->numberBetween($min = 1, $max = 50),
        //'location' => $faker->regexify('[37.]+[0-9]{7}+\.[A-Z]{2,4}+,[23.]+[0-9]{7}'),//37.9825762,23.7097187
        'location'=> $faker->latitude($min = 37, $max = 37).$faker->longitude($min = 23, $max = 23),
        'garage' => $faker->address,
        'files' => '',
        'type' => $faker->randomElement($array = array ('Brakedown','Accident')),
        'status' => $faker->numberBetween($min = 1, $max = 5),
        'source' => $faker->randomElement($array = array ('AppAutomatic','ManualBackend')),
        'comment' => $faker->sentence($nbWords = 7, $variableNbWords = true),
    ];
});

/*
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
*/

$factory->define(App\Contract::class, function (Faker\Generator $faker) {
    return [
        'customer' => $faker->numberBetween($min = 1, $max = 50),
        'contractNumber' => $faker->numberBetween($min = 10000000000, $max = 19999999999),
        'vehicleType' => $faker->randomElement($array = array ('sedan','suv','truck','wagon','rover','motorcycle')),
        'vehicleColor' => $faker->safeColorName,
        'vehicleManufacturer' => $faker->randomElement($array = array ('Suzuki','Peugeot-Citroën','Honda',' Fiat-Chrysler','Ford','Hyundai','Renault-Nissan','General Motors','Volkswagen','Toyota','BMW','Mercedes-Benz')),
        'licensePlate' => $faker->regexify('[A-Z]{3}+\-[0-9]{4}'),
        'contractStart' => '2016-10-01 14:17:21',
        'contractEnd' => '2017-10-01 14:17:21',
    ];
});


/*
$table->string('vehiclePlate');
$table->string('vehicleColor');
$table->string('vehicleYear');
$table->string('vehicleCc');
$table->string('vehicleType');//motocycle,car etc
$table->string('vehicleManufacturer');
*/

$factory->define(App\Vehicle::class, function (Faker\Generator $faker) {
    return [
        'vehiclePlate' => $faker->regexify('[A-Z]{3}+\-[0-9]{4}'),
        'vehicleColor' => $faker->safeColorName,
        'vehicleYear' => $faker->year($max = 'now'),
        'vehicleCc' => $faker->numberBetween($min =200, $max = 4000),
        'vehicleType' => $faker->randomElement($array = array ('sedan','suv','truck','wagon','rover','motorcycle')),
        'vehicleManufacturer' => $faker->randomElement($array = array ('Suzuki','Peugeot-Citroën','Honda',' Fiat-Chrysler','Ford','Hyundai','Renault-Nissan','General Motors','Volkswagen','Toyota','BMW','Mercedes-Benz')),
    ];
});

/*
$table->integer('vehicle')->unsigned();
$table->string('startTime');
$table->string('duration');
$table->string('startPoint');//gps location
$table->string('distance');
*/
$factory->define(App\Schedule::class, function (Faker\Generator $faker) {
    return [
        'vehicle' => $faker->numberBetween($min =1, $max = 50),
        'startTime' => $faker->safeColorName,
        'duration' => $faker->numberBetween($min =1, $max = 8),
        'startPoint' => $faker->latitude($min = 36, $max = 37).$faker->longitude($min = 22, $max = 23),
        'distance' => $faker->numberBetween($min =25, $max = 60),
    ];
});

/*
$table->integer('vehicle')->unsigned();
$table->string('vehicleLocation');
*/

$factory->define(App\Vehicles_gps::class, function (Faker\Generator $faker) {
    return [
        'vehicle' => $faker->numberBetween($min =1, $max = 50),
        'vehicleLocation' => $faker->latitude($min = 34, $max = 37).$faker->longitude($min = 16, $max = 23),
    ];
});

/*
$table->integer('vehicle')->unsigned();
$table->integer('issue')->unsigned();
*/
$factory->define(App\Vehicles_issue::class, function (Faker\Generator $faker) {
    return [
        'vehicle' => $faker->numberBetween($min =1, $max = 50),
        'issue' => $faker->numberBetween($min =1, $max = 50),
    ];
});