<?php

use Faker\Generator as Faker;
use Desaku\Model\category;

$factory->define(category::class, function (Faker $faker) {
    return [
        'nama_kategori' => "KATEGORI-".$faker->word,
    ];
});
