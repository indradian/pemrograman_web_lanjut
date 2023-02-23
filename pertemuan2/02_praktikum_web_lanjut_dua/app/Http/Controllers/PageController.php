<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Indrayana Dian Prasetya <br> 2141720232';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan ID: '.$id;
    }
}
