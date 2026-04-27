<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::redirect('/', '/movies');

Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::post('/add-movie', [MovieController::class, 'store'])->name('movies.add');
Route::post('/edit-movie', [MovieController::class, 'edit'])->name('movies.edit');
Route::delete('/delete-movie', [MovieController::class, 'delete'])->name('movies.destroy');