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

Route::get('ChampionshipTeam', array('as' => 'ChampionshipTeam', function() {
    return view('championship/team');
}));

Route::get('ChampionshipFixturesAndResults', array('as' => 'ChampionshipFixturesAndResults', function() {
    return view('championship/fixturesAndResults');
}));

Route::get('MeritTeam', array('as' => 'MeritTeam', function() {
    return view('merit/team');
}));

Route::get('MeritFixturesAndResults', array('as' => 'MeritFixturesAndResults', function() {
    return view('merit/fixturesAndResults');
}));

Route::get('Singles', array('as' => 'Singles', function() {
    return view('competitions/singles');
}));

Route::get('Pairs', array('as' => 'Pairs', function() {
    return view('competitions/pairs');
}));

Route::get('Triples', array('as' => 'Triples', function() {
    return view('competitions/triples');
}));

Route::get('Fours', array('as' => 'Fours', function() {
    return view('competitions/fours');
}));

Route::get('Over50Triples', array('as' => 'Over50Triples', function() {
    return view('competitions/over50Triples');
}));

Route::get('Over60s', array('as' => 'Over60s', function() {
    return view('competitions/over60s');
}));

Route::get('AfternoonLeagues', array('as' => 'AfternoonLeagues', function() {
    return view('internalLeagues/afternoon');
}));

Route::get('EveningLeagues', array('as' => 'EveningLeagues', function() {
    return view('internalLeagues/evening');
}));

Route::get('Honours', array('as' => 'Honours', function() {
    return view('page/honours');
}));

Route::get('Contact', array('as' => 'Contact', function() {
    return view('page/contact');
}));