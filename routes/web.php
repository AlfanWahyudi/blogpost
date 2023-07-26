<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\HomeDashboardController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.detail');

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::prefix('sign-in')->group(function () {
            Route::get('/', 'create')->name('signin');
            Route::post('/', 'authenticate')->name('signin.authenticate');
        });
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::prefix('sign-up')->group(function () {
            Route::get('/', 'create')->name('signup.create');
            Route::post('/', 'store')->name('signup.store');
        });
    });
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [HomeDashboardController::class, 'index'])->name('dashboard.home');
    });
});
