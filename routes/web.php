<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\COntrollers\ArticleController;
// use Illuminate\Http\Request;

Route::resource('articles', ArticleController::class);

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


// Auth::routes();
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
