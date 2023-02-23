<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

// Number 1
Route::get('/', function () {
    return 'Tampilan Home Awal Website';
});

// Number 2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return "Marbel Edu Games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return "Marbel and Friends Kids Games";
    });
    Route::get('/riri-story-books', function () {
        return "Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        return "Kolak Kids Songs";
    });
});

//Number 3
Route::get('/news/{title?}', function ($title = null) {
    return "News ".$title;
});

// Number 4
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return "Karir Politeknik Negeri Malang";
    });
    Route::get('/magang', function () {
        return "Magang Politeknik Negeri Malang";
    });
    Route::get('/kunjungan-industri', function () {
        return "Kunjungan Insustri Politeknik Negeri Malang";
    });
}); 

// Number 5
Route::get('/about-us', function () {
    return 'About Our Company';
});

//Number 6
Route::resource('contact-us', ContactUsController::class)->only(['index', 'store']);