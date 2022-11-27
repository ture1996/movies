<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Models\Movie;
use App\Http\Controllers\CommentsController;
use App\Models\Comment;
use App\Http\Controllers\GenresController;

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

Route::get('/movies', [MoviesController::class , 'index']);

Route::get('/movies/create', [MoviesController::class, 'create']);

Route::post('/movies', [MoviesController::class, 'store']);

Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('single-movie');

Route::get('/movies/{id}/comments', [MoviesController::class , 'show']);

Route::post('/comment/add', [CommentsController::class, 'store'])->name('movie-comments');

Route::get('genres/{genre}', [GenresController::class , 'show'])->name('genre-movies');