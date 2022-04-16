<?php

use App\Http\Controllers\AdminPanel\Home\MyController;
use App\Http\Controllers\AdminPanel\CategoryController As AdminCategoryController;
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
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');
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
Route::get('/admin', [MyController::class,'index'])->name('admin');
// **** admin category route ****//
Route::get('/admin/category', [AdminCategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store', [AdminCategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminCategoryController::class,'edit'])->name('admin_category_edit');
Route::get('/admin/category/delete/{id}', [AdminCategoryController::class,'delete'])->name('admin_category_delete');
Route::post('/admin/category/update/{id}', [AdminCategoryController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/show/{id}', [AdminCategoryController::class,'show'])->name('admin_category_show');
