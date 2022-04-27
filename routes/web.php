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
    return view('frontend.index');
});

Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/register', function () {
    return view('frontend.register');
});
Route::get('/homeLevel', function () {
    return view('frontend.homeLevel');
});

Route::get('/dashboard/{page}', function ($page) {
    $path = 'frontend.dashboard' . $page;
    return view($path);
});
