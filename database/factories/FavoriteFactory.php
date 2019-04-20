<?php

use Faker\Generator as Faker;
use Desaku\Model\favorite;
use Desaku\Model\customer;
use Desaku\Model\product;

$factory->define(favorite::class, function (Faker $faker) {
    return [
        'id_customer' => $faker->randomElement(customer::pluck('id')->toArray()),
        'id_product' => $faker->randomElement(product::pluck('id')->toArray()),
    ];
});
