<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jozsefController;
use App\Http\Controllers\phunorController;

Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/jozsef',[jozsefController::class,"index"])->name('menu1');
Route::get('/Hunor',[phunorController::class,"index"])->name('phunor');