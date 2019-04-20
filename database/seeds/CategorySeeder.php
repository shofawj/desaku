<?php

use Illuminate\Database\Seeder;
use Desaku\Model\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(category::class,20)->create();
    }
}
