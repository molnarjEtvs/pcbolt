<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jozsefController;

Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/jozsef',[jozsefController::class,"index"])->name('menu1');