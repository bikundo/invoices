<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name'            => $faker->name,
        'email'           => $faker->unique()->safeEmail,
        'street_address'  => $faker->streetAddress,
        'street_address2' => $faker->streetAddress,
        'city'            => $faker->city,
        'state'           => $faker->state,
        'zip_code'        => $faker->postcode,
        'country'         => $faker->country,
        'phone'           => $faker->phoneNumber,
        'status'          => 1,
    ];
});
