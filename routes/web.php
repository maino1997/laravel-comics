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
    $comics = config('comics');
    return view('home', ['comics' => $comics]);
})->name('home');


Route::get('/characters.php', function () {
    return view('characters');
})->name('characters');

Route::get('/comics.php', function () {
    return view('comics');
})->name('comics');

Route::get('/movies.php', function () {
    return view('movies');
})->name('movies');

Route::get('/tv.php', function () {
    return view('tv');
})->name('tv');

Route::get('/games.php', function () {
    return view('games');
})->name('games');

Route::get('/collectables.php', function () {
    return view('collectables');
})->name('collectables');

Route::get('/videos.php', function () {
    return view('videos');
})->name('videos');

Route::get('/fans.php', function () {
    return view('fans');
})->name('fans');

Route::get('/news.php', function () {
    return view('news');
})->name('news');

Route::get('/shop.php', function () {
    return view('shop');
})->name('shop');

Route::get('/comic/{id}', function ($id) {

    $comics = config('comics');
    $comic = $comics[$id];

    return view('comic', ['comic' => $comic]);
})->name('comic');
