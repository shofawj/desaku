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
        'jumlah_beli' => $faker->randomElement([5, 12, 30, 20]),
        'harga' => $faker->randomElement([50000, 12000, 3000, 20000]),
        'total_harga' => $faker->randomElement([500000, 120000, 300000, 200000]),
    ];
});
