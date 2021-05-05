<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Results;

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
    return view('home');
});

Route::get('/search',[Results::class, 'getResults']);

Route::get('/search/{id}',[Results::class, 'singleResult']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/privacy', function () {
    return view('privacy');
});
