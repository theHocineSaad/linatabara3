<?php

use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Route::get('/', function (Illuminate\Http\Request $request) {
            $request->flush();

            return view('pages.home');
        })->name('homePage');

        Route::get('/about', function () {
            return view('pages.about');
        })->name('aboutPage');

        Route::get('/dashboard', function () {
            return view('pages.dashboards.user');
        })->middleware('auth')->name('dashboard');

        Route::get('/donors', [DonorController::class, 'index'])->name('donorsPage');
    });
