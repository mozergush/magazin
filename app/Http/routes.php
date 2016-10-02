<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'main', 'uses'=> 'MainController@index']);
Route::get('/main', ['as'=>'main', 'uses'=> 'MainController@index']);

Route::get('/shop', ['as'=>'shop', 'uses'=> 'ShopController@index']);

Route::get('/shop/{slug}/{sort?}',  ['as'=>'shop-category', 'uses'=> 'ShopController@shopCategory']);

Route::auth();

Route::get('/cabinet', ['as'=>'cabinet', 'uses'=> 'CabinetController@Show']);

Route::post('/checkout','BasketController@checkout');

Route::get('/product/{id}',  ['as'=>'product', 'uses'=> 'ProductController@index']);

Route::get('/search',  ['as'=>'shop-search', 'uses'=> 'ShopController@shopSearch']);

Route::get('/about', ['as'=>'about', 'uses'=> 'AboutController@index']);