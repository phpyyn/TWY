<?php

use Faker\Generator as Faker;
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
$factory->define(App\Models\Status::class, function (Faker $faker) {
  $date_time = $faker->date . ' ' . $faker->time;
    static $password;

    return [
        'content'=>$faker->text(),
        'created_at'=>$date_time,
        'updated_at'=>$date_time,
    ];
});
