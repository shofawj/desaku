<?php

use Illuminate\Database\Seeder;
use Desaku\Model\customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(customer::class,20)->create();
    }
}
