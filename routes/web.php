<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('master');
    });

    Route::resource('articles', ArticleController::class);
    Route::resource('users', UserController::class);

    // Route::prefix('/articles')->group(function () {
    //     Route::get('/', [ArticleController::class, 'index'])->name('articles');
    //     Route::post('/create', [ArticleController::class, 'create'])->name('create-articles');
    //     Route::get('{article}/edit', [ArticleController::class, 'edit'])->name('edit-articles');
    //     Route::put('{article}', [ArticleController::class, 'update'])->name('update-articles');
    //     Route::delete('{article}', [ArticleController::class, 'destroy'])->name('delete-articles');
    //     Route::get('/{article}/show', [ArticleController::class, 'show'])->name('articles.show');

    // });

    // Route::prefix('/users')->group(function () {
    //     Route::get('/', [UserController::class, 'index'])->name('users');
    //     Route::post('/create', [UserController::class, 'create'])->name('create-users');
    //     Route::get('{users}/edit', [UserController::class, 'edit'])->name('edit-users');
    //     Route::put('{users}', [UserController::class, 'update'])->name('update-users');
    //     Route::delete('{user}', [UserController::class, 'destroy'])->name('delete-users');
    //     Route::get('/{user}/show', [UserController::class, 'show'])->name('show-users');
        Route::get('/{user}/articles', [UserController::class, 'articles'])->name('user-articles');
    // });
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);