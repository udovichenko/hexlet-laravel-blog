<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ArticleCategoryController, ArticleController, PageController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'about']);
Route::get('/team', [PageController::class, 'team']);

Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('article_categories', [ArticleCategoryController::class, 'index'])
    ->name('article_categories.index');

Route::get('article_categories/{id}', [ArticleCategoryController::class, 'show'])
    ->name('article_categories.show');