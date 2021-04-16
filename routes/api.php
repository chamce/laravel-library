<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// authors
Route::get('/authors/show/all', [App\Http\Controllers\AuthorController::class, 'index']);
Route::post('/authors/new', [App\Http\Controllers\AuthorController::class, 'store']);
Route::get('/authors/show/{id}', [App\Http\Controllers\AuthorController::class, 'show']);
Route::post('/authors/update/{id}', [App\Http\Controllers\AuthorController::class, 'update']);
Route::post('/authors/delete/{id}', [App\Http\Controllers\AuthorController::class, 'destroy']);
// genres
Route::get('/genres/show/all', [App\Http\Controllers\GenreController::class, 'index']);
Route::post('/genres/new', [App\Http\Controllers\GenreController::class, 'store']);
Route::get('/genres/show/{id}', [App\Http\Controllers\GenreController::class, 'show']);
Route::post('/genres/update/{id}', [App\Http\Controllers\GenreController::class, 'update']);
Route::post('/genres/delete/{id}', [App\Http\Controllers\GenreController::class, 'destroy']);
// conditions
Route::get('/conditions/show/all', [App\Http\Controllers\ConditionController::class, 'index']);
Route::post('/conditions/new', [App\Http\Controllers\ConditionController::class, 'store']);
Route::get('/conditions/show/{id}', [App\Http\Controllers\ConditionController::class, 'show']);
Route::post('/conditions/update/{id}', [App\Http\Controllers\ConditionController::class, 'update']);
Route::post('/conditions/delete/{id}', [App\Http\Controllers\ConditionController::class, 'destroy']);
// books
Route::get('/books/show/all', [App\Http\Controllers\BookController::class, 'index']);
Route::post('/books/new', [App\Http\Controllers\BookController::class, 'store']);
Route::get('/books/show/{id}', [App\Http\Controllers\BookController::class, 'show']);
Route::post('/books/update/{id}', [App\Http\Controllers\BookController::class, 'update']);
Route::post('/books/delete/{id}', [App\Http\Controllers\BookController::class, 'destroy']);
// book_authors
Route::get('/book_authors/show/all', [App\Http\Controllers\BookAuthorController::class, 'index']);
Route::post('/book_authors/new', [App\Http\Controllers\BookAuthorController::class, 'store']);
Route::get('/book_authors/show/{id}', [App\Http\Controllers\BookAuthorController::class, 'show']);
Route::post('/book_authors/update/{id}', [App\Http\Controllers\BookAuthorController::class, 'update']);
Route::post('/book_authors/delete/{id}', [App\Http\Controllers\BookAuthorController::class, 'destroy']);