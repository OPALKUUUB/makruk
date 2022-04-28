<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);

// User Login & Register
Route::get('/login', [FrontendController::class, 'login']);
Route::post('user/checklogin', [FrontendController::class, 'checklogin']);
Route::get('user/logout', [FrontendController::class, 'logout']);
Route::get('/register', [FrontendController::class, 'register']);
Route::post('user/checkregister', [FrontendController::class, 'checkregister']);

Route::get('/home', function () {
    return view('frontend.homeLevel');
});

Route::get('/dashboard/{page}', function ($page) {
    $path = 'frontend.dashboard' . $page;
    return view($path);
});
