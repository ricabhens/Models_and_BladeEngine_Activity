<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('book');
});

Route::get('/book', [BookController::class, 'index']);