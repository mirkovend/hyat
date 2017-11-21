<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
            'middle_name' =>  $faker->lastName,
            'first_name' =>  $faker->lastName,
            'last_name' => $faker->firstName,
            'address' => $faker->city,
            'name_extension' => " ",
            'gender' => $faker->randomElement($array = array ('MALE', 'FEMALE')) ,
            'birthdate' => '1996-05-07',
            'contact_number' => $faker->phoneNumber,
            'country_id' => 1,
            'agency_id' => 1,
            'remarks' => 'None',
            'photo' => 'http://via.placeholder.com/80x80',
    ];
});
