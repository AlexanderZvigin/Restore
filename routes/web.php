<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');
Route::get('games','App\Http\Controllers\gamesController@allGames')->name('games');
Route::get('films', 'App\Http\Controllers\FilmsController@allFilms')->name('films');
Route::get('games/{gameId}','App\Http\Controllers\currentGameController@currentGame')->name('currentGame');
Route::get('films/{filmId}','App\Http\Controllers\currentFilmController@currentFilm')->name('currentFilm');
Route::get('profile', function () {
    return view('profile');
})->name('profile');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
