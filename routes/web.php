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
    return view('index');
})->name('index');

Route::get('/Chi_sono', function () {
    return view('page.chiSono');
})->name('chiSono');

Route::get('/Varie', function () {
    return view('page.varie');
})->name('varie');

Route::get('/Contatti', function () {
    return view('page.contatti');
})->name('contatti');

