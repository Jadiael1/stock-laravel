<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Dashboard;


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


Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'verifyLogin'])->name('auth.verifyLogin');
    Route::any('/logout', [LoginController::class, 'logout'])->name('auth.logout');

    Route::get('/register', [RegisterController::class, 'create'])->name('auth.create');
    Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');
});

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::prefix('dashboard')->group(function () {
    Route::get('/', [Dashboard::class, 'index'])->middleware('auth')->name('dashboard');
});

Route::fallback(function () {
    return view('fallback');
});

