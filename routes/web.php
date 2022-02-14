<?php

use App\Http\Controllers\EbookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::get('/insert', [RegisterController::class,'index2'])->middleware('auth');
Route::post('/register', [RegisterController::class,'db']);

Route::get('/homeuser', [HomeController::class,'index'])->middleware('auth');
Route::get('/homeadmin', [HomeController::class,'index'])->middleware('auth');
Route::get('/accountedit', [HomeController::class,'accountedit'])->middleware('auth');

Route::resource('ebook', EbookController::class);

Route::get('/updateprofil', [UserController::class,'edit'])->middleware('auth')->name('users.editprofile');
Route::get('/viewprofil', [UserController::class,'show'])->middleware('auth')->name('users.viewprofile');
Route::get('/updaterole', [UserController::class,'edit2'])->middleware('auth')->name('users.updaterole');
Route::resource('user', UserController::class);

Route::get('edit/{id}', [UpdateController::class,'showdata']);
Route::post('edit', [UpdateController::class,'update']);
