<?php

use Illuminate\Database\Seeder;
use Desaku\Model\sales_detail;

class SalesDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(sales_detail::class,20)->create();
    }
}
