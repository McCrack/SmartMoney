<?php

use App\Containers\Material\Models\Material;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Material::class, function (Faker $faker) {
  return [
    'name' => $faker->sentence(3),
    'category' => "pages",
    'language' => "en",
    'content' => $faker->text(300),
  ];
});
