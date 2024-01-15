<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/products', ProductController::class)->only(['index', 'create']);
});

Route::get('/admin/products', 'Admin\ProductController@index')->name('admin.products.index');
Route::get('/admin/products/create', 'Admin\ProductController@create')->name('admin.products.create');
Route::resource('admin/products', 'Admin\ProductController');


