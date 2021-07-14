<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('secret'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'customer',    
            'email' => 'customer@gmail.com',
            'password' => Hash::make('secret'),
            'role' => 'customer'
        ]);
    }
}
