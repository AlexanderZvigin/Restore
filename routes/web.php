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
Route::post('AddNews', [App\Http\Controllers\AddNewsController::class, 'AddNews'])->name('AddNews');
Route::get('addNewsForm', function () {
  return view('NewsForm');
})->name('AddNewsForm');
Route::get('adminAllNews', [App\Http\Controllers\adminAllNewsController::class, 'allNews'] )->name('AdminAllNews');
Route::get('ChangeNews/{news_id}', [App\Http\Controllers\ChangeNewsController::class, 'getNews'] )->name('ChangeNews');
Route::get('DeleteNews/{news_id}', [App\Http\Controllers\DeleteNewsController::class, 'DeleteNews'] )->name('DeleteNews');
Route::post('updateNews/{news_id}', [App\Http\Controllers\ChangeNewsController::class, 'updateNews'] )->name('updateNews');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
