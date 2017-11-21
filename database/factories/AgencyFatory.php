<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
            'name' => $faker->name.' Agency',
            'address' =>  $faker->city,
            'email_address' => str_random(10).'@gmail.com',
            'contact_person' => $faker->name,
            'contact_number' => $faker->phoneNumber,
    ];});
