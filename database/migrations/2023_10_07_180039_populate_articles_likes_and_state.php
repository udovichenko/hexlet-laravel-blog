<?php

use Illuminate\Database\Migrations\Migration;

class PopulateArticlesLikesAndState extends Migration
{
    public function up(): void
    {
        App\Models\Article::all()->each(function ($article) {
            $article->state = rand(0, 1) ? 'draft' : 'published';
            $article->likes_count = rand(0, 100);
            $article->save();
        });
    }

    public function down()
    {
    }
}
