<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name('member.dashboard.index');

// url : /dashboard/blogs
Route::get('/dashboard/blogs', function() {
    return view('dashboard.blog.index');
})->name('member.dashboard.blog.index');

Route::get('/dashboard/blogs/edit', function() {
    return view('dashboard.blog.edit');
})->name('member.dashboard.blog.edit');
