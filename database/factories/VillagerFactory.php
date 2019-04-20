<?php

use Faker\Generator as Faker;
use Desaku\Model\villager;

$factory->define(villager::class, function (Faker $faker) {
    return [
        'nama' => $faker-> lastName(),
        'alamat' => $faker-> address(),
        'jkel' => $faker-> randomElement(["Laki-Laki","Perempuan"]),
        'no_hp' => $faker-> e164PhoneNumber(),
    ];
});
