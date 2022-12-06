<?php

use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::get('/', [HomeController::class, 'home'])->name('homePage');

    Route::prefix('/donors')->group(function () {
        Route::get('', [DonorController::class, 'index'])->name('donorsPage');
        Route::get('/search', [DonorController::class, 'search'])->name('donorsSearch');
    });

    Route::get('/about', [HomeController::class, 'about'])->name('aboutPage');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    });
});

// Route::get('/test', function () {
//     return User::getOtherDonorsCanDonateTo(1, 15, 1254);
// });
