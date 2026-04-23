<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::redirect('/', '/movies');

Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::post('/add-movie', [MovieController::class, 'store']);
