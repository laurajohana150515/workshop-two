<?php

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

Route::get('/', function () {
    return view('layouts.plantilla');
});

Route::get('universo', function () {
    return view('universo');
});

Route::get('planetas', function () {
    return view('planetas');
});

Route::get('galaxia', function () {
    return view('galaxia');
});

Route::get('sistema-solar', function () {
    return view('sistema-solar');
});

