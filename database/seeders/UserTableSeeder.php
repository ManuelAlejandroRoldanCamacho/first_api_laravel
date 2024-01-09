<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('123456');

        User::create([
            'name' => 'Admin', 
            'email' => 'admin@demo.com',
            'password' => $password, 
        ]);

        for ($i = 0; $i < 10; $i++){
            
            User::create([
                'name' => $faker->name, 
                'email' => $faker->email,
                'password' => $password, 
            ]);

        }

    }
}
