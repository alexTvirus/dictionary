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
    return view('home');
});

Auth::routes();

Route::get('/danhmuc', [
    'as' => 'danhmuc',
    'uses' => 'HomeController@laydanhmuc'
]);

Route::post('/themdata', [
    'as' => 'themdata',
    'uses' => 'HomeController@themdata',
]);

Route::get('/themdata', function () {
    return view('themdata');
});

Route::get('/timdata', function (){
    return view('home');
});

Route::post('/timdata', [
    'as'=> 'timdata',
    'uses' => 'HomeController@timdata',
]);

Route::get('/datachuaconghia', [
    'as'=> 'datachuaconghia',
    'uses' => 'HomeController@datachuaconghia',
]);

Route::get('/datatrongngay', [
    'as'=> 'datatrongngay',
    'uses' => 'HomeController@datatrongngay',
]);

Route::get('/capnhat/{id}', [
    'as'=> 'capnhat',
    'uses' => 'HomeController@setupcapnhatdata',
]);
Route::post('/capnhat', [
    'as'=> 'capnhatdata',
    'uses' => 'HomeController@capnhatdata',
]);
Route::get('/xoadata/{id}', [
    'as'=> 'xoadata',
    'uses' => 'HomeController@xoadata',
]);