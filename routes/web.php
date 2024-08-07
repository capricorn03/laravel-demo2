<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Job;

Route::get('/', function () {

    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => Job::all()
    ]
    );
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});




Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/books/{author}', [BookController::class, 'index'])->name('books.index');