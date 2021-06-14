<?php

namespace Database\Seeders;

use App\Models\Article;
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
        Article::truncate();

        Article::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'article1',
            'content' => 'article1',
            'image' => 'article1'
        ]);
        Article::create([
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'article2',
            'content' => 'article2',
            'image' => 'article2'
        ]);
    }
}
