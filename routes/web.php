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
});

Route::get('/treners','\App\Http\Controllers\TrenerController@index');
Route::get('/treners/{id}','\App\Http\Controllers\TrenerController@show');
Route::post('/treners/sacuvaj','\App\Http\Controllers\TrenerController@store');

Route::get('/termins','\App\Http\Controllers\TerminController@index');
Route::post('/termins/sacuvaj','\App\Http\Controllers\TerminController@store');
Route::delete('/termins/izbrisi/{id}','\App\Http\Controllers\TerminController@destroy');