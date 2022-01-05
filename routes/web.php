<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/book', [\App\Http\Controllers\BookController::class, 'index']);

Route::get('/book/{book}', [\App\Http\Controllers\BookController::class, 'show']);

Route::get('/book/create/book', [\App\Http\Controllers\BookController::class, 'create']);
Route::post('/book/create/book', [\App\Http\Controllers\BookController::class, 'store']);
Route::get('/book/{book}/edit', [\App\Http\Controllers\BookController::class, 'edit']);
Route::put('/book/{book}/edit', [\App\Http\Controllers\BookController::class, 'update']);
Route::delete('/book/{book}', [\App\Http\Controllers\BookController::class, 'destroy']);
