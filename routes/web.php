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

Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('master');
    });
    
    Route::get('/Contact-us', function () {
        return view('pages.contactUs');
    });
    
    Route::get('/FAQ', function () {
        return view('pages.faq');
    });
    
    Route::get('/Profile', function () {
        return view('dashboard.users.profile');
    });

    Route::resource('/articles', ArticleController::class);
    Route::resource('/users', UserController::class);

    Route::get('/{user}/articles', [UserController::class, 'articles'])->name('user-articles');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
