<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jozsefController;
use App\Http\Controllers\njuditController;

Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/jozsef',[jozsefController::class,"index"])->name('menu1');
Route::get('/njudit',[njuditController::class,"index"])->name('menunjudit');