<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list_product', [ProductController::class, 'list']);

Route::get('home', function () {
    return view('pages/home');
});

Route::get('/halaman_pencarian', function () {
    return view('halaman_pencarian');
});

Route::get('/landing', function () {
    return view('halaman_pencarian');
});