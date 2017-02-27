<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('user', 'UserController',
	['only' => ['index', 'store', 'update', 'destroy', 'show']]);


Route::resource('supplier', 'SupplierController',
	['only' => ['index', 'store', 'update', 'destroy', 'show']]);

Route::resource('riskrelease', 'RiskReleaseController',
	['only' => ['index', 'store', 'update', 'destroy', 'show']]);

Route::resource('partnumber', 'PartNumberController',
	['only' => ['index', 'store', 'update', 'destroy', 'show']]);

Route::resource('customer', 'CustomerController',
	['only' => ['index', 'store', 'update', 'destroy', 'show']]);

Route::resource('concession', 'ConcessionController',
	['only' => ['index', 'store', 'update', 'destroy', 'show']]);
