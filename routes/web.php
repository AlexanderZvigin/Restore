<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');
Route::get('games', function () {
    return view('games');
})->name('games');
Route::get('films', function () {
    return view('films');
})->name('films');
Route::get('auth', function () {
    return view('auth');
})->name('auth');
Route::get('reg', function () {
    return view('reg');
})->name('reg');
Route::post('reg/submit','App\Http\Controllers\RegistrationController@registration')->name('reg-form');
