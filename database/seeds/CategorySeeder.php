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
        
        category::create([
            'nama_kategori' => 'biji-bijian'
        ]);
        category::create([
            'nama_kategori' => 'kacang-kacangan'
        ]);
        category::create([
            'nama_kategori' => 'sayur-sayuran'
        ]);
        category::create([
            'nama_kategori' => 'hewan-ternak'
        ]);
    }
}
