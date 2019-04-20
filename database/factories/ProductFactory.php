<?php

use Faker\Generator as Faker;
use Desaku\Model\product;
use Desaku\Model\category;
use Desaku\Model\villager;

$factory->define(product::class, function (Faker $faker) {
    return [
        'id_category' => $faker->randomElement(category::pluck('id')->toArray()),
        'id_villager' => $faker->randomElement(villager::pluck('id')->toArray()),
        'nama' => $faker-> lastName(),
        'deskripsi' => $faker->sentence($nbWords = 9, $variableNbWords = true),
        'jenis' => $faker-> randomElement(["Nabati","Hewani"]),
        'image' => $faker-> imageUrl($width = 640, $height = 480),
    ];
});
