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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/simple-page', function () {
    return view('simple');
})->name('simple-page');

Route::get('/another-page', function () {
    return view('another');
})->name('another-page');

Route::get('/blog-page', function () {
    return view('blog');
})->name('blog-page');
