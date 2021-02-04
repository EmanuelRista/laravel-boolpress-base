<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostInformationModel;
use Faker\Generator as Faker;

$factory->define(PostInformationModel::class, function (Faker $faker) {
    
    static $post_id = 1;
    return [
        "description" => $faker->paragraph(),
        "slug" =>$faker->slug(),
        "post_id" => $post_id++
    ];
});
