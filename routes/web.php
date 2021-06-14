<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', function () {
    return view('users.create');
});
Route::get('/users/edit', function () {
    return view('users.edit');
});

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/create', function () {
    return view('articles.create');
});
Route::get('/articles/edit', function () {
    return view('articles.edit');
});

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/create', function () {
    return view('categories.create');
});
Route::get('/categories/edit', function () {
    return view('categories.edit');
});
