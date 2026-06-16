<?php

use App\Http\Controllers\GitHubController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', ServicesController::class)->name('services.index');
Route::get('/github', GitHubController::class)->name('github.index');
Route::get('/videos', VideosController::class)->name('videos.index');
