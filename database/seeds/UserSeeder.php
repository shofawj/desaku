<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Desaku\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'      => 'Super Admin',
            'email'     => 'admin@desaku.dev',
            'password'  => Hash::make('admin'),
        ]);

        $user = User::create([
            'name'      => 'pembeli',
            'email'     => 'pembeli@desaku.dev',
            'password'  => Hash::make('pembeli'),
        ]);

        $user = User::create([
            'name'      => 'penjual',
            'email'     => 'penjual@desaku.dev',
            'password'  => Hash::make('penjual'),
        ]);
    }
}
