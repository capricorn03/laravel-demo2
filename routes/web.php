<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/books/{author}', [BookController::class, 'index'])->name('books.index');