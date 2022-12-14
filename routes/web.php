<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

Route::get('locale/{language}', [LanguageController::class, 'language']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/apply', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/directions', [HomeController::class, 'directions'])->name('directions');
Route::get('/reports', [HomeController::class, 'reports'])->name('reports');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/cooperation', [HomeController::class, 'cooperation'])->name('cooperation');
Route::get('/media', [HomeController::class, 'media'])->name('media');
Route::get('/about', [HomeController::class, 'about'])->name('about');
