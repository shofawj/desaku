<?php

use Faker\Generator as Faker;
use Desaku\Model\sales_detail;
use Desaku\Model\product;
use Desaku\Model\sales;

$factory->define(sales_detail::class, function (Faker $faker) {
    return [
        'id_product' => $faker->randomElement(product::pluck('id')->toArray()),
        'id_sale' => $faker->randomElement(sales::pluck('id')->toArray()),
        'jml_beli' =>  $faker->randomElement([10, 12, 20, 22])
    ];
});
