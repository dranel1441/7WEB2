<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
// Route::view(Portfolio, Portfolio);
Route::get('/', function () {
    return view('Portfolio');
});
Route::get('/register', [Authcontroller::class, 'showRegister'])->name('register.form');
Route::post('/register', [Authcontroller::class, 'Register'])->name('register');

Route::get('/login', [Authcontroller::class, 'showLogin'])->name('login.form');
Route::post('/login', [Authcontroller::class, 'performLogin'])->name('login');

Route::post('/logout', function(){

});