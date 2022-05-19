<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware(['auth','is_admin'])->name('dashboard');

Route::group(['prefix'=>'dashboard','as'=>'dashboard.','middleware' => ['auth','is_admin']], function(){//'auth'

    Route::resource('user', 'App\Http\Controllers\Admin\UserController', ['except' => ['show']]);
    Route::resource('post', 'App\Http\Controllers\Admin\PostController', ['except' => ['show']]);
    Route::resource('post_category', 'App\Http\Controllers\Admin\PostCategoryController', ['except' => ['show']]);
});




