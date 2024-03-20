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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/tx', function () {
    return view('tx');
});


Route::get('/tv', function () {
    return view('tv');
});

Route::get('/Hanmodata', function () {
    return view('Hanmodata');
});

Route::get('/Admin', function () {
    return view('Admin');
});

Route::get('/ApiSetting', function () {
    return view('ApiSetting');
});

Route::get('/Reverse', function () {
    return view('Reverse');
});

Route::get('/RestPassword', function () {
    return view('RestPassword');
});

Route::get('/BroadCast', function () {
    return view('BroadCast');
});