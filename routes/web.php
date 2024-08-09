<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookshopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bookshop',BookshopController::class);
Route::resource('book',BookController::class);