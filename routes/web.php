<?php

use App\Http\Controllers\PersonnelController;
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
});

Route::get('perso.single-post', function () {
    return view('perso.single-post');
});
Route::get('perso.category', function () {
    return view('perso.category');
});
Route::get('perso.about', function () {
    return view('perso.about');
});

Route::get('perso.search-result', function () {
    return view('perso.search-result');
});

Route::get('perso.contact', function () {
    return view('perso.contact');
});

