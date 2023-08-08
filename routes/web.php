<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\HomeDashboardController;
use App\Http\Controllers\PostDashboardController;
use App\Http\Controllers\Public\CategoryController;
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

//TODO: change route /post/{slug} to /posts/{slug}
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.detail');

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::prefix('sign-in')->group(function () {

            //TODO: change name of create route to signin.create
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
    //----Resources----
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [HomeDashboardController::class, 'index'])->name('home');

        Route::controller(PostDashboardController::class)
            ->prefix('posts')
            ->name('post.')
            ->group(function () {
                Route::get('/', 'index')->name('index');

                Route::get('/create', 'create')->name('create');
                Route::post('/create', 'store')->name('store');

                Route::get('/edit/{slug}', 'edit')->name('edit');
                Route::put('/edit/{slug}', 'update')->name('update');

                Route::delete('/destroy/{post}', 'destroy')->name('destroy');
        });

    });


    //---AJAX---
    /**
     *  endpoint example
     *  category
     *  list -> BASE_URL/categories  | return data {[][][][][][][]}
     *  detail -> BASE_URL/categories/id  | return data {}
     *
     *
     */
    Route::controller(CategoryController::class)
        ->prefix('categories')
        ->group(function() {
            Route::get('/', 'list');
    });
});
