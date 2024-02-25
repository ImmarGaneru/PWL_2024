<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Lalu Immaratul Ardhi Ganeru 2241720169';
    }
    public function articles($id){
        return 'Halaman Artikel dengan Id '.$id;
    }
}
