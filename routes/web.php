<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

Route::get('/', [App\Http\Controllers\indexController::class, 'index'])->name('index');

Route::get('/zones/{id}', [App\Http\Controllers\indexController::class, 'zones'])->name('zones');
Route::get('/representative/{id}', [App\Http\Controllers\indexController::class, 'representative'])->name('representative');
Route::get('/initiatives', [App\Http\Controllers\indexController::class, 'initiatives'])->name('initiatives');

Route::get('/initiativeDetails/{id}', [App\Http\Controllers\indexController::class, 'initiativeDetails'])->name('initiativeDetails');
Route::get('/', [App\Http\Controllers\indexController::class, 'index'])->name('index');

Route::view('/contact', 'pages.contact');
Route::view('/test', 'test');