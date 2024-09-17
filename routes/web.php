<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jozsefController;
use App\Http\Controllers\reszterController;
use App\Http\Controllers\zspetiController;

Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/jozsef',[jozsefController::class,"index"])->name('menu1');

Route::get('/reszter',[reszterController::class,"index"])->name('menureszter');
Route::get('/zspeti',[zspetiController::class,"index"])->name('zspeti');