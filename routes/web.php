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

Route::get('articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');

Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::patch('article_categories/{id}', [ArticleCategoryController::class, 'update'])
    ->name('article_categories.update');

Route::get('article_categories/{id}/edit', [ArticleCategoryController::class, 'edit'])
    ->name('article_categories.edit');

Route::get('article_categories/create', [ArticleCategoryController::class, 'create'])
    ->name('article_categories.create');

Route::get('article_categories', [ArticleCategoryController::class, 'index'])
    ->name('article_categories.index');

Route::post('article_categories', [ArticleCategoryController::class, 'store'])
    ->name('article_categories.store');

Route::get('article_categories/{id}', [ArticleCategoryController::class, 'show'])
    ->name('article_categories.show');

Route::post('articles', [ArticleController::class, 'store'])
    ->name('articles.store');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');

Route::patch('articles/{id}', [ArticleController::class, 'update'])
    ->name('articles.update');
