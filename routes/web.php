<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');
// Libri
Route::get('/books/index', [PublicController::class, 'books_index'])->name('books_index');
Route::get('/books/create', [PublicController::class, 'books_create'])->name('books_create');
// Musei
Route::get('/museums/index', [PublicController::class, 'museums_index'])->name('museums_index');
Route::get('/museums/create', [PublicController::class, 'museums_create'])->name('museums_create');
// Film
Route::get('/movies/index', [PublicController::class, 'movies_index'])->name('movies_index');
Route::get('/movies/create', [PublicController::class, 'movies_create'])->name('movies_create');

Route::post('/book/submit', [PublicController::class, 'book_submit'])->name('post_book_submit');
Route::post('/museum/submit', [PublicController::class, 'museum_submit'])->name('post_museum_submit');
Route::post('/movie/submit', [PublicController::class, 'movie_submit'])->name('post_movie_submit');
