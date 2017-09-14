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

Route::get('/', 'PagesController@getIndex');

Route::get('/blagajna', 'PagesController@getBlagajna');

Route::get('/podrobnosti', ['as' => '/podrobnosti', 'uses' =>'PagesController@getPodrobnosti']);

Route::get('/kosarica', ['as' => '/kosarica', 'uses' =>'PagesController@getKosarica']);

Route::post('/blagajna-form', 'PagesController@postBlagajnaForm');

Route::post('/vkosarico', 'PagesController@postVKosarico');

Route::post('/tbagbyid', 'PagesController@postTbagById');