<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Category::truncate();

        $faker = \Faker\Factory::create();

        for($j = 0; $j <= 2; $j++) {
            Category::create([
                'name' => $faker->word,   
            ]);
        }

    }
}
