<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardContentController;
use App\Http\Controllers\DashboardImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Category;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/content/{content:slug}', [ContentController::class, 'index']);
Route::get('/about', function() {
    return view('about.index', [
        'title' => 'Code-N | About',
        'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
        'poster' => 'logo-icon.png',
        'categories' => Category::all()
    ]);
});

Route::get('/admin', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/content', DashboardContentController::class)->middleware('auth');
Route::resource('/dashboard/image', DashboardImageController::class)->middleware('auth');
Route::resource('/dashboard/category', DashboardCategoryController::class)->middleware('auth');