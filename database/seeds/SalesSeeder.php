<?php

use Illuminate\Database\Seeder;
use Desaku\Model\sales;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(sales::class,20)->create();
    }
}
