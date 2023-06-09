<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);
Route::get('books/create', [BookController::class, 'create']);
Route::post('/books/store', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/edit/{id}', [BookController::class, 'edit']);
Route::patch('/books/update/{id}', [BookController::class, 'update']);
Route::delete('/books/delete/{id}', [BookController::class, 'destroy']);