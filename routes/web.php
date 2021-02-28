<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwalController;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [AwalController::class, 'index']);
Route::get('/about-us', [AwalController::class, 'about']);
Route::get('/blog', [AwalController::class, 'blog']);
Route::get('/post-details', [AwalController::class, 'post']);
Route::get('/contact-us', [AwalController::class, 'contact']);