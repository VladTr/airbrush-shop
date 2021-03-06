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

Route::resource('/', 'IndexController', [
    'only'=>['index'],
    'names'=>[
        'index'=>'home'
    ]
]);
Route::get('/category/{id}', 'GoodController@index');
Route::get('/about', 'AboutController@index');

/*Route::get('/category/{id}', 'IndexController@getGoodsByCategory');*/
