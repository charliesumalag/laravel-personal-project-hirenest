<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/createpost', [JobController::class, 'create'])->name('create');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
