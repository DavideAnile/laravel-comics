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

    $links = [
        'characters',
        'comics',
        'movies',
        'tv',
        'Games',
        'Collectibles',
        'videos',
        'fans',
        'news',
        'Shop',
    ];

    $comics = config('comics');

    

    return view('home' , compact('links', 'comics'));
});
