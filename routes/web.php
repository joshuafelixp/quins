<?php

use App\Http\Controllers\MitraController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [ServiceController::class, 'index']);

Route::get('/contact', function () {
    return view('contact', [
        'title' => '| Contact',
        'css' => 'css/product_style.css'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => '| About',
        'css' => 'css/about_style.css'
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        'title' => '| Portfolio',
        'css' => 'css/port_style.css'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => '| Blog',
        'css' => 'css/blog_style.css'
    ]);
});

Route::get('/{mitra:slug}', [ServiceController::class, 'show']);
// Route::get('/{name}', function () {
//     return view('mitra', [
//         'title' => '| Blog',
//         'css' => 'css/blog_style.css'
//     ]);
// });
