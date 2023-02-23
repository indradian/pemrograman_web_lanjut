<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;

// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);   

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticlesController::class,'articles']);