<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
{
    return 'Selamat Datang';
}
public function about()
{
    return "NIM : 2141720215 <br> Nama : Fawaa'el Akbar Firdaus";
}
public function articles($id)
{
    return 'Halaman artikel dengan ID '.$id;
}
}

