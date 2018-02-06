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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',array('as'=>'info','uses' => 'InvoiceController@index'));
Route::get('/findPrice',array('as'=>'findPrice','uses'=>'InvoiceController@findPrice'));
Route::get('/findSatuan',array('as'=>'findSatuan','uses'=>'InvoiceController@findSatuan'));
Route::get('/findConvertion',array('as'=>'findConvertion','uses'=>'InvoiceController@findConvertion'));
Route::post('/insert',array('as'=>'insert','uses'=>'InvoiceController@insert'));