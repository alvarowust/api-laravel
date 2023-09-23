<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/menu', function () {
    return view('menu');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/produto', function () {
    return view('produto');
});

