<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/zones/{id}', [App\Http\Controllers\IndexController::class, 'zones'])->name('zones');
Route::get('/representative/{id}', [App\Http\Controllers\IndexController::class, 'representative'])->name('representative');
Route::get('/initiatives', [App\Http\Controllers\IndexController::class, 'initiatives'])->name('initiatives');

Route::get('/initiativeDetails/{id}', [App\Http\Controllers\IndexController::class, 'initiativeDetails'])->name('initiativeDetails');
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::view('/contact', 'pages.contact');
Route::view('/test', 'test');