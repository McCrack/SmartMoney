<?php

use App\Containers\Page\Models\Page;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Page::class, function (Faker $faker) {
  return [
    'parent_id' => 7,
    'name' => "Marketing strategy development",
    'slug' => "marketing-strategy-development",
    'language' => "en",
    'title' => "Marketing strategy development title",
    'description' => "Marketing strategy development description",
    'preview' => "",
    'created_at' => $this->faker->dateTimeThisMonth('now'),
    'updated_at' => $this->faker->dateTimeThisMonth('now'),
  ];
});
