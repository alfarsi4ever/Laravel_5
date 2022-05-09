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
Route::get('/list', 'ProductsController@list');
Route::get('/companies', 'manufacturesController@listCompany');
Route::get('/layout', function(){
    return View('layout');
});
Route::post('/list', 'ProductsController@create');
Route::post('/companies', 'manufacturesController@create');


