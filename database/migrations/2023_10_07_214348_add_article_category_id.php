<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned()->nullable(true);
            $table->foreign('category_id')->references('id')->on('article_categories');
        });

        App\Models\Article::all()->each(function ($article) {
            $article->category_id = rand(1, 2);
            $article->save();
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
           $table->dropColumn('category_id');
        });
    }
};
