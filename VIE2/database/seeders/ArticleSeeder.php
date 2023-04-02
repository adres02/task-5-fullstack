<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $categories = Category::all();

        $articles = [
            [
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => 'cat.jpg',
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Article 2',
                'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'cat.jpg',
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        Article::insert($articles);
    }
}
