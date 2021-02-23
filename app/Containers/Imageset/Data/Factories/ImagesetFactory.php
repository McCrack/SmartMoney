<?php

use App\Containers\Imageset\Models\Imageset;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Imageset::class, function (Faker $faker) {
  return [
    'name' => $faker->sentence(3),
    'category' => "test",
    'language' => "en",
    //'content' => null,
  ];
});
