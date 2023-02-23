<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "Indrayana Dian Prasetya <br>";
    echo "2141720132";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID:".$id;
});