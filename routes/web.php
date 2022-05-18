<?php

use App\Http\Controllers\AdminPanel\AdminPoliclinicController;
use App\Http\Controllers\AdminPanel\Home\MyController;
use App\Http\Controllers\AdminPanel\CategoryController As AdminCategoryController;
use App\Http\Controllers\AdminPanel\ImageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Http\Controllers\HomeController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
// call controller
Route::get('/',[HomeController::class,'index'])->name('home');
// Route-> MyController->View
Route::get('/test',[HomeController::class,'test'])->name('test');
// Route with parameters
Route::get('/policlinic/{id}',[HomeController::class,'policlinic'])->name('policlinic');
// Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/home',[HomeController::class,'redirect']);
// ***** admin panel ***** //
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [MyController::class,'index'])->name('index');
    // **** General Routes route ****//
    Route::get('/setting', [MyController::class,'setting'])->name('setting');
    Route::post('/setting', [MyController::class,'settingUpdate'])->name('setting.update');

    // **** admin category route ****//
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function() {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/delete/{id}','delete')->name('delete');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
    });

    // **** admin policlinic routes ****//
    Route::prefix('/policlinic')->name('policlinic.')->controller(AdminPoliclinicController::class)->group(function() {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/delete/{id}','delete')->name('delete');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
    });


    // **** admin image gallery routes ****//
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function() {
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/delete/{pid}/{id}','delete')->name('delete');
    });
});

