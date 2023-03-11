<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('home');
Route::get('profile', function () {
    return view('profile');
})->name('profile');
Auth::routes();
Route::middleware(['auth', 'isAdmin'])->group(function () {
  Route::get('/admin', function () {
    return view('admin');
  })->name('dashboard');
//  Route::get('addGame', function () {
//    return view('addGame');
//  })->name('addGame');
//  Route::get('addFilm', function () {
//    return view('addFilm');
});
Route::get('Forum', function () {
  return view('forum');
})->name('Forum');
Route::get('Documents', function () {
  return view('Documents');
})->name('Documents');
//Route::post('currentFilm/{filmId}', [App\Http\Controllers\currentFilmController::class, 'CommentSave'])->name('CommentSave');
//Route::post('currentGame/{gameId}', [App\Http\Controllers\currentGameController::class, 'CommentSave'])->name('gameCommentSave');
Route::post('profileChange', [App\Http\Controllers\ProfileController::class, 'ProfileChange'])->name('profileChange');
//Route::get('FilmDelete/{filmId}', [App\Http\Controllers\filmDeleteController::class, 'FilmDelete'])->name('FilmDelete');
//Route::get('adminAllGames', [App\Http\Controllers\adminAllGamesController::class, 'allGames'])->name('adminAllGames');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
