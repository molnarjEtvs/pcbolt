<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jozsefController;
use App\Http\Controllers\dcsabaController;

Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/jozsef',[jozsefController::class,"index"])->name('menu1');

Route::get('/dcsaba',[dcsabaController::class,"index"])->name('menu_dcsaba');
