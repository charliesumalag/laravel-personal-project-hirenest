<?php

use App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/createpost', [JobController::class, 'create'])->name('create');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/signup', [Authentication::class, 'create'])->name('auth.create');

Route::post('/signup', [Authentication::class, 'store'])->name('auth.store');

Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
