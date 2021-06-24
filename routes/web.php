<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
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

Route::get('/',[GuestController::class, 'home']);
Route::get('/content/{id}',[GuestController::class, 'content'])->name('article.content');
Route::get('/search',[GuestController::class, 'search']);


Route::prefix('admin')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users/create', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('/users/detail/{id}', [UserController::class, 'show'])->name('user.detail');
    
    Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/articles/create', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/articles/update/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/articles/delete/{id}', [ArticleController::class, 'destroy'])->name('article.delete');
    Route::get('/articles/detail/{id}', [ArticleController::class, 'show'])->name('article.detail');
    
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/categories/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    
});


