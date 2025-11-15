<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::view(Portfolio, Portfolio);
Route::get('/', function () {
    return view('Portfolio');
});