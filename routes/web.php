<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//customer
Route::get('customer', 'App\Http\Controllers\CustomerController@index');
Route::get('customer/create', 'App\Http\Controllers\CustomerController@create');
Route::post('customer', 'App\Http\Controllers\CustomerController@input');
Route::get('customer/delete/{id_customer}', 'App\Http\Controllers\CustomerController@delete');
Route::get('customer/edit/{id_customer}', 'App\Http\Controllers\CustomerController@edit');
Route::post('customer/update/{id_customer}', 'App\Http\Controllers\CustomerController@update');
Route::get('customer/view/{id_customer}', 'App\Http\Controllers\CustomerController@view');
Route::get('read/{id_customer}', 'App\Http\Controllers\CustomerController@read');
Route::get('customer/cetak_pdf', 'App\Http\Controllers\CustomerController@cetak_pdf');