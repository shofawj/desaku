<?php

use Faker\Generator as Faker;
use Desaku\Model\customer;

$factory->define(customer::class, function (Faker $faker) {
    $timestamp = mt_rand(1, time());
    $tgl_random = date("y-m-d", $timestamp);
    return [
        'nama' => $faker-> lastName(),
        'alamat' => $faker-> address(),
        'no_hp' => $faker-> e164PhoneNumber(),
        'jkel' => $faker-> randomElement(["Laki-Laki","Perempuan"]),
        'tgl_lahir' => $tgl_random,
        'image' => $faker-> imageUrl($width = 640, $height = 480),
    ];
});
