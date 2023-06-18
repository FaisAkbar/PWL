<?php

use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facades\View;
use App\Http\Controllers\ViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['name' => "Fawaa'el Akbar Firdaus", 'nim' => '2141720215']);
});

// nomor 1
Route::get('/home', function () {
    return view('home.home', ['name' => "Fawaa'el Akbar Firdaus", 'nim' => '2141720215', 'kelas' => 'TI-2C']);
});

// nomor 2
Route::get('/produk', function () {
    return view('produk');
});
Route::prefix('/produk')->group(function () {
    route::get('/pensil', function () {
        return view('produk.pensil');
    });
    route::get('/penghapus', function () {
        return view('produk.penghapus');
    });
});

// nomor 3
Route::get('/news/{news?}', function ($news = null) {
    return view('news.news', ['news' => $news]);
});

// nomor 4
Route::get('/program', function () {
    return view('program');
});
Route::prefix('/program')->group(function () {
    route::get('/RCTI', function () {
        return view('program.RCTI');
    });
    route::get('/SCTV', function () {
        return view('program.SCTV');
    });
});

// nomor 5
Route::get('/about-us', function () {
    return view('about-us');
});

// nomor 6
Route::resource('/kontak', ViewController::class)->only([
    'index'
]);
