<?php

use Illuminate\Database\Seeder;
use Desaku\Model\villager;

class VillagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(villager::class,20)->create();
    }
}
