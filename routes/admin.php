<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as Home;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/blog', [Home::class, 'blog'])->name('blog');
Route::get('/blog/create', [Home::class, 'create'])->name('blog.create');
Route::post('/blog', [Home::class, 'store'])->name('blog.store');

Route::get('/test', function() {
    return view('admin.test');
});

// Route::get('/create-admin', [Home::class, 'createAdmin'])->name('created-admin');
