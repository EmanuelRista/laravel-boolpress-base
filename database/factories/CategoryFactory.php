<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoryModel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(CategoryModel::class, function (Faker $faker) {
    $title = implode(" ", $faker->words(2));
    $slug = Str::slug($title, "-"); //L'ho copiato :D SPUDORATAMENTE

    return [
        "title" => $title,
        "slug" => "/" . $slug,

    ];
});
