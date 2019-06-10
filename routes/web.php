<?php

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

//Route::get('/home', 'HomeController@index')->name('strona');


//nie uzywane daje tylko numer
//Route::get('/','SitesController@index');
Route::get('/add','SitesController@add');
Route::get('/klienci','SitesController@klienci');
Route::post('/save', [
    'uses' => 'SitesController@save',
    'as' => 'sites.save'
    ]);
Route::get('/client/{client}',
    [
        'uses' => 'SitesController@show',
        'as' => 'client.show'
    ]);
Auth::routes();

