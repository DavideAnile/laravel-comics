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

    $helpCards = [

        [
            'img' => 'buy-comics-digital-comics.png',
            'title' => 'DIGITAL COMICS'
        ],
        [
            'img' => 'buy-comics-merchandise.png',
            'title' => 'DC MERCHANDISE'
        ],
        [
            'img' => 'buy-comics-subscriptions.png',
            'title' => 'SUBSCRIPTION'
        ],
        [
            'img' => 'buy-comics-shop-locator.png',
            'title' => 'COMIC SHOP LOCATOR'
        ],
        [
            'img' => 'buy-dc-power-visa.svg',
            'title' => 'DC POWER VISA'
        ]
        
    ];


    


    return view('home' , compact('links', 'comics' , 'helpCards'));
});
