<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::redirect('/', '/movies');

Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::post('/add-movie', [MovieController::class, 'store'])->name('movies.add');
Route::get('/edit-movie/{id}', [MovieController::class, 'edit'])->name('movies.edit');
Route::post('/update-movie/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::delete('/delete-movie/{id}', [MovieController::class, 'delete'])->name('movies.destroy');