<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jozsefController;
use App\Http\Controllers\ndaniController;
use App\Http\Controllers\reszterController;
use App\Http\Controllers\zspetiController;
use App\Http\Controllers\dcsabaController;
use App\Http\Controllers\szzeretunkDaniController;
use App\Http\Controllers\njuditController;
use App\Http\Controllers\sbenceController;
use App\Http\Controllers\phunorController;

Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/jozsef',[jozsefController::class,"index"])->name('menu1');
Route::get('/dani',[ndaniController::class,"index"])->name('menu_dani');
Route::get('/reszter',[reszterController::class,"index"])->name('menureszter');
Route::get('/zspeti',[zspetiController::class,"index"])->name('zspeti');
Route::get('/dcsaba',[dcsabaController::class,"index"])->name('menu_dcsaba');
Route::get('/szeretunkDani',[szzeretunkDaniController::class,"index"])->name('danika');
Route::get('/njudit',[njuditController::class,"index"])->name('menunjudit');
Route::get('/sbence',[sbenceController::class,"index"])->name('sbence');
Route::get('/Hunor',[phunorController::class,"index"])->name('phunor');
