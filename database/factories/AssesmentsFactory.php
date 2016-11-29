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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Scool\Assesments\Models\Assesment;

$factory->define(Assesment::class, function (Faker\Generator $faker) {

    return [

        'grade_id' => $faker->randomDigit,
        'user_id' => $faker->randomDigit,
        'item_id' => $faker->randomDigit,
        'note' => $faker->sentence,
        'item_type' => $faker->sentence,
        'weight' => $faker->sentence,
        'parent_grade_id' => $faker->randomDigit,


    ];
});


