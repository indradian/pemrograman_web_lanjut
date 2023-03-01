<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

// Number 1
Route::get('/', function () {
    return view('home');
});

// Number 2
Route::prefix('product')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return view('product')
            ->with('name','Marbel Edu Games');
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return view('product')
            ->with('name','Marbel And Friends Kids Games');
    });
    Route::get('/riri-story-books', function () {
        return view('product')
            ->with('name','Riri Story Books');
    });
    Route::get('/kolak-kids-songs', function () {
        return view('product')
            ->with('name','Kolak Kids Songs');
    });
});

//Number 3
Route::get('/news/{title?}', function ($title = null) {
    return view('news')
        ->with('title', $title);
});

//Number 4
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return view('program')
            ->with('name','Karir Politeknik Negeri Malang');
    });
    Route::get('/magang', function () {
        return view('program')
        ->with('name','Magang Politeknik Negeri Malang');
    });
    Route::get('/kunjungan-industri', function () {
        return view('program')
        ->with('name','Kunjungan Industri Politeknik Negeri Malang');
    });
}); 

//Number 5
Route::get('/about-us', function () {
    return view('about-us');
});

//Number 6
Route::resource('contact-us', ContactUsController::class)->only(['index', 'store']);