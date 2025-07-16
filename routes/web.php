<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
    
Route::get('/', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
