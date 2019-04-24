<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VillagerSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(SalesDetailSeeder::class);
        $this->call(UserSeeder::class);
    }
}
