<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/services', ServicesController::class)->name('services.index');
Route::get('/github', GitHubController::class)->name('github.index');
Route::get('/videos', [VideosController::class, 'index'])->name('videos.index');
Route::get('/videos/create', [VideosController::class, 'create'])
    ->middleware('auth')
    ->name('videos.create');
Route::post('/videos', [VideosController::class, 'store'])
    ->middleware('auth')
    ->name('videos.store');

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
