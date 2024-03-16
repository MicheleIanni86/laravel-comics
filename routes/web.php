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
  return view('home');
})->name('home');

Route::get('/characters', function () {
  return view('jumboparts.characters');
})->name('characters');

Route::get('/comics', function () {
  return view('jumboparts.comics');
})->name('comics');

Route::get('/movies', function () {
  return view('jumboparts.movies');
})->name('movies');

Route::get('/tv', function () {
  return view('jumboparts.tv');
})->name('tv');

Route::get('/games', function () {
  return view('jumboparts.games');
})->name('games');

Route::get('/collectibles', function () {
  return view('jumboparts.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
  return view('jumboparts.videos');
})->name('videos');

Route::get('/fans', function () {
  return view('jumboparts.fans');
})->name('fans');

Route::get('/news', function () {
  return view('jumboparts.news');
})->name('news');

Route::get('/shop', function () {
  return view('jumboparts.shop');
})->name('shop');

