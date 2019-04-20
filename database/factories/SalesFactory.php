<?php

use Faker\Generator as Faker;
use Desaku\Model\sales;
use Desaku\Model\customer;
use Desaku\Model\product;

$factory->define(sales::class, function (Faker $faker) {
    $timestamp = mt_rand(1, time());
    $tgl_random = date("y-m-d", $timestamp);
    return [
        'id_customer' => $faker->randomElement(customer::pluck('id')->toArray()),
        'id_product' => $faker->randomElement(product::pluck('id')->toArray()),
        'tanggal_beli' => $tgl_random,
        'total_beli' => $faker->randomElement([100000, 1200000, 3000000, 2000000]),
    ];
});
