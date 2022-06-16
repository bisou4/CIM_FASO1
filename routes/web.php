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

Route::get('poste', function () {
    return view('perso.single-post');
});
Route::get('nos_categories', function () {
    return view('perso.category');
});
Route::get('apropos', function () {
    return view('perso.about');
});

Route::get('recherche', function () {
    return view('perso.search-result');
});

Route::get('contact', function () {
    return view('perso.contact');
});

