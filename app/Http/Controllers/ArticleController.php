<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        if (empty($q)) {
            $articles = Article::paginate();
        } else {
            $articles = Article::where('name', 'like', "%{$q}%")->paginate();
        }
        return view('article.index', ['articles' => $articles, 'q' => $q]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
}
