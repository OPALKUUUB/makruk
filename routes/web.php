<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
Route::get('/admin', [AdminController::class, 'index']);
