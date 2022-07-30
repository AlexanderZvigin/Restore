<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');
Route::get('games','App\Http\Controllers\gamesController@allGames')->name('games');
Route::get('films', function () {
    return view('films');
})->name('films');
Route::get('games/{gameId}','App\Http\Controllers\currentGameController@currentGame')->name('currentGame');
Route::get('profile', function () {
    return view('profile');
})->name('profile');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
