<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/articles');
});

Route::get('/articles', [ArticleController::class, 'index'])
    ->name('article.list');

Route::post('/article', [ArticleController::class, 'store'])
    ->name('article.store');

Route::get('/article/new', [ArticleController::class, 'create'])
    ->name('article.new');


Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])
    ->name('article.edit');

Route::post('/article/update/{id}', [ArticleController::class, 'update'])
    ->name('article.update');

Route::get('/article/{id}', [ArticleController::class, 'show'])
    ->name('article.show');
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])
    ->name('article.delete');
