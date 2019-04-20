<?php

use Illuminate\Database\Seeder;
use Desaku\Model\product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(product::class,20)->create();
    }
}
