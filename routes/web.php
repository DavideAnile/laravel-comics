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


    $referencies = [
        [
            'title' => 'DC COMICS',
            'links' => [
                'Characters',
                'Comics',
                'Movies',
                'TV',
                'Games',
                'Videos',
                'News'
            ]
        ],
        [
            'title' => 'DC',
            'links' => [
                'Terms Of Use',
                'Privacy policy (new)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscription',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            ]
        ],
        [
            'title' => 'SITES',
            'links' => [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            ]
        ],
        [
            'title' => 'SHOP',
            'links' => [
                'Shop DC',
                'Shop DC Collectibles'
            ]
        ]
    ];

    


    return view('home' , compact('links', 'comics' , 'helpCards', 'referencies'));
});


Route::get('/bonus', function(){

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

    $referencies = [
        [
            'title' => 'DC COMICS',
            'links' => [
                'Characters',
                'Comics',
                'Movies',
                'TV',
                'Games',
                'Videos',
                'News'
            ]
        ],
        [
            'title' => 'DC',
            'links' => [
                'Terms Of Use',
                'Privacy policy (new)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscription',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            ]
        ],
        [
            'title' => 'SITES',
            'links' => [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            ]
        ],
        [
            'title' => 'SHOP',
            'links' => [
                'Shop DC',
                'Shop DC Collectibles'
            ]
        ]
    ];

    return view('bonus', compact('comics', 'links', 'referencies'));
})->name('bonus');
