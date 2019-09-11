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

Route::get('/', array('as' => '/', function() {
    return view('page/home');
}));

Route::get('championship', array('as' => 'page/championship', 'uses' => 'ChampionshipController@index'));

Route::get('merit', array('as' => 'page/merit', 'uses' => 'MeritController@index'));

Route::get('competitions', array('as' => 'competitions', function() {
    return view('page/competitions');
}));

Route::get('afternoonLeagues', array('as' => 'afternoonLeagues', function() {
    return view('internalLeagues/afternoon');
}));

Route::get('eveningLeagues', array('as' => 'eveningLeagues', function() {
    return view('internalLeagues/evening');
}));

Route::get('honours', array('as' => 'honours', function() {
    return view('page/honours');
}));