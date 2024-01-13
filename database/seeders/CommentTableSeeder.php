<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Comment::truncate();

        $faker = \Faker\Factory::create();

        $articles = Article::all();

        $users = User::all();

        foreach($users as $user){

            Auth::attempt(['email' => $user->email, 'password' => '123456']);
    
            foreach($articles as $article){

                Comment::create([
                    'text' => $faker->paragraph(),  
                    'article_id' => $article->id, 
                ]);
                
            }

        }

    }
    
}
