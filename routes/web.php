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

/*
Route::get('/', function () {
    return view('home');
}) ->name('home');

Route::get('/contatti', function () {
    return view('contatti'); 
}) ->name('contatti');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
}) ->name('chi-siamo');
*/

Route::get( '/', 'PageController@index')->name('home');

Route::get( '/contatti', 'PageController@contatti')->name('contatti');

Route::get( '/chi-siamo', 'PageController@chiSiamo')->name('chi-siamo');