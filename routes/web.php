<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('home');
Route::get('games','App\Http\Controllers\gamesController@allGames')->name('games');
Route::get('films', 'App\Http\Controllers\FilmsController@allFilms')->name('films');
Route::get('games/{gameId}','App\Http\Controllers\currentGameController@currentGame')->name('currentGame');
Route::get('films/{filmId}','App\Http\Controllers\currentFilmController@currentFilm')->name('currentFilm');
Route::get('profile', function () {
    return view('profile');
})->name('profile');
Auth::routes();
Route::middleware(['auth', 'isAdmin'])->group(function () {
  Route::get('/admin', function () {
    return view('admin');
  })->name('dashboard');
  Route::get('addGame', function () {
    return view('addGame');
  })->name('addGame');
  Route::get('addFilm', function () {
    return view('addFilm');
  })->name('addFilm');
  Route::post('GameSave', [App\Http\Controllers\addGameController::class, 'GameSave'])->name('GameSave');
  Route::post('FilmSave', [App\Http\Controllers\addFilmController::class, 'FilmSave'])->name('FilmSave');
  Route::get('GameSave', [App\Http\Controllers\adminAllFilmsController::class, 'allFilms'])->name('adminAllFilms');
  Route::get('adminAllFilms/{filmId}', [App\Http\Controllers\editFilmsController::class, 'getFilm'])->name('filmEdit');
  Route::post('adminAllFilms/{filmId}', [App\Http\Controllers\changeFilmsController::class, 'changeFilm'])->name('filmChange');
  Route::get('addCritic', function () {
    return view('addCritic');
  })->name('addCritic');
  Route::post('addCritic/submit', [App\Http\Controllers\addCriticController::class, 'addCritic'])->name('CriticSave');

});
Route::post('currentFilm/{filmId}', [App\Http\Controllers\currentFilmController::class, 'CommentSave'])->name('CommentSave');
Route::post('currentGame/{gameId}', [App\Http\Controllers\currentGameController::class, 'CommentSave'])->name('gameCommentSave');
Route::post('profileChange', [App\Http\Controllers\ProfileController::class, 'ProfileChange'])->name('profileChange');
Route::get('FilmDelete/{filmId}', [App\Http\Controllers\filmDeleteController::class, 'FilmDelete'])->name('FilmDelete');
Route::get('adminAllGames', [App\Http\Controllers\adminAllGamesController::class, 'allGames'])->name('adminAllGames');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
