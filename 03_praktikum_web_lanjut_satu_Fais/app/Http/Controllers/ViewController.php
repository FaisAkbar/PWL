<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('contact', [
            'insta' => url('https://www.instagram.com/fais.akbar13/?hl=id'),
            'mail' => 'akbarfais06@gmail.com',
            'git' => 'https://github.com/FaisAkbar'
        ]);
    }
}