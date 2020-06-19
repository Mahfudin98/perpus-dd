<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ComponenController@index');

// Route::get('/pdf', function () {
//     return view('pdf');
// });

Route::get('/search', 'ComponenController@search');

// Route::get('/list', 'ComponenController@index');
Route::get('/count', 'ComponenController@count');

Route::get('/createkp', 'ComponenController@create');
Route::post('/buatkp', 'ComponenController@store')->name('createkp');

Route::get('/createta', 'TugasAkhirController@create');
Route::post('/buatta', 'TugasAkhirController@store')->name('createta');

Route::get('/viewpdf/{pdf}', 'ComponenController@pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
