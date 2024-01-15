<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Article::truncate();

        $faker = \Faker\Factory::create();

        $users = User::all();

        foreach($users as $user){

            Auth::attempt(['email' => $user->email, 'password' => '123456']);
    
            $num_articles = 2;
            
            for($j = 0; $j < $num_articles; $j++) {
                Article::create([
                    'title' => $faker->sentence,  
                    'body' => $faker->paragraph(), 
                    'category_id' => $faker->numberBetween(1,3)
                ]);
            }

        }    

    }
}
