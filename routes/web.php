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


Route::get('/cpanel', function () {
    return view('cpanel');
});

Route::resource('home', 'HomeController');

Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('parts', 'PartNumberController');

Route::resource('suppliers', 'SupplierController');

Route::resource('customers', 'CustomerController');

Route::resource('risks', 'RiskReleaseController');