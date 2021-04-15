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

Route::get('/authors/show/all', [App\Http\Controllers\AuthorController::class, 'index']);
Route::post('/authors/new', [App\Http\Controllers\AuthorController::class, 'store']);
Route::get('/authors/show/{id}', [App\Http\Controllers\AuthorController::class, 'show']);
Route::post('/authors/update/{id}', [App\Http\Controllers\AuthorController::class, 'update']);
Route::post('/authors/delete/{id}', [App\Http\Controllers\AuthorController::class, 'destroy']);