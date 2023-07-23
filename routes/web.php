<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\DashboardHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
    Route::controller(AuthController::class)->group(function () {
        Route::prefix('sign-in')->group(function () {
            Route::get('/', 'login')->name('signin');
            Route::post('/', 'authenticate')->name('signin.authenticate');
        });

        Route::prefix('sign-up')->group(function () {
            Route::get('/', 'register')->name('signup.create');
            Route::post('/', 'store')->name('signup.store');
        });
    });
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardHomeController::class, 'index'])->name('dashboard.home');
    });
});
