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


//sets the right language
function handleLocale ($lang) {
    if ($lang == 'pl' || $lang == 'en' || $lang == 'de') {
        App::setlocale($lang);
    }
    else {
        App::setlocale('pl');
    }
}

Route::redirect('/', '/pl');

Route::get('{lang}/', function ($lang) {
    handleLocale ($lang);
    return view('home');
})->name('home');

Route::get('{lang}/search',[Results::class, 'getResults'])->name('search');

Route::get('{lang}/search/{id}',[Results::class, 'singleResult'])->name('searchID');

Route::get('{lang}/about', function ($lang) {
    handleLocale ($lang);
    return view('about');
})->name('about');

Route::get('{lang}/cookies', function ($lang) {
    handleLocale ($lang);
    return view('cookies');
})->name('cookies');

Route::get('{lang}/privacy', function ($lang) {
    handleLocale ($lang);
    return view('privacy');
})->name('privacy');

Route::get('{lang}/maps', function ($lang) {
    handleLocale ($lang);
    return view('maps');
})->name('maps');
