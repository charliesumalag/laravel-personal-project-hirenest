<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/createpost', [JobController::class, 'create'])->name('create');
