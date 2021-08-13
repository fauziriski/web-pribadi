<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController as Home;

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

Route::get('/', [Home::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about', [Home::class, 'about'])->name('about');

Route::get('/blog', [Home::class, 'blog'])->name('blog');

Route::get('/blog-single/{slug}', [Home::class, 'blog_single'])->name('about-single');


