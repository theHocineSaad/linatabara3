<?php

use App\Http\Controllers\WebController;
use App\Models\BloodGroup;
use App\Models\Daira;
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
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
], function()
{

    // Fortify routes
    require(base_path('vendor/laravel/fortify/routes/routes.php'));

    // Home page
    Route::get('/', [WebController::class, 'homePage'])->name('homePage');
});


Route::get('test', function(){

//    $count = BloodGroup::withCount([
//        'users as usersApos' => function ($query) {
//            $query->where('blood_groups.id', '1');
//        },
//        'users as usersAneg' => function ($query) {
//            $query->where('blood_groups.id', '2');
//        },
//    ])->get();


    return  memory_get_usage();

});
