<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoryModel;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(CategoryModel::class, function (Faker $faker) {
    $title = implode(" ", $faker->words(2));
    $slug = Str::slug($title, "-");
    
    return [
        "title" => $title,
        "slug" => "/" . $slug,

    ];
});
