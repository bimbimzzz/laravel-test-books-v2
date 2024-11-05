<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;



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



Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view ('pages.app.dashboard', ['type_menu' => '']);
    })->name('home');

    Route::get('/login', function () {
        return view('pages.auth.auth-login');
    });

    Route::resource('user', UserController::class);
    Route::resource('author', AuthorController::class);
    Route::resource('book', BookController::class);


});


