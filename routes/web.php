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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index']);
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
