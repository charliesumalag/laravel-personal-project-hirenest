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
Route::get('/login', [Authentication::class, 'login'])->name('auth.login');


Route::post('/signup', [Authentication::class, 'store'])->name('auth.store');
Route::post('/login',  [Authentication::class, 'authenticate'])->name('auth.authenticate');
Route::post('/logout', [Authentication::class, 'logout'])->name('auth.logout');

Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
