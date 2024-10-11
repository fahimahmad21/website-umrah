<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('paket-travel', [\App\Http\Controllers\PackageController::class, 'index'])->name('paket');
Route::get('paket-travel/{umrah_package:slug}', [\App\Http\Controllers\PackageController::class, 'show'])->name('paket.show');
