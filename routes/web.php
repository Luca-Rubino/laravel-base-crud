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
    return view('layout.index');
})->name('index');

Route::get('/Chi_sono', function () {
    return view('layout.page.chiSono');
})->name('chiSono');

Route::get('/Varie', function () {
    return view('layout.page.varie');
})->name('varie');

Route::get('/Contatti', function () {
    return view('layout.page.contatti');
})->name('contatti');

