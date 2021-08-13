<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as Home;
use App\Http\Controllers\Admin\BlogController as Blog;

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

//blog
Route::get('/blog', [Blog::class, 'index'])->name('blog');
Route::get('/blog/create', [Blog::class, 'create'])->name('blog.create');
Route::post('/blog', [Blog::class, 'store'])->name('blog.store');
Route::get('/blog/{blog}/edit', [Blog::class, 'edit'])->name('blog.edit');
Route::post('/blog/update', [Blog::class, 'update'])->name('blog.update');

Route::get('/test', function() {
    return view('admin.test');
});

// Route::get('/create-admin', [Home::class, 'createAdmin'])->name('created-admin');
