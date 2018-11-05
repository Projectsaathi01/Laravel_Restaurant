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

Route::get('dashboard', 'AccountController@index')->name('account.index');
// Route::get('Account/index', 'AccountController@index');
Route::get('accounts/create', 'AccountController@create')->name('account.create');
Route::post('accounts/store', 'AccountController@store')->name('account.store');
Route::get('accounts/edit/{id}', 'AccountController@edit')->name('account.edit');
Route::put('accounts/update/{id}', 'AccountController@update')->name('account.update');
Route::delete('accounts/delete/{id}', 'AccountController@destroy')->name('account.destroy');

Route::get('/', 'LoginController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('h', function(){
	return view('inventory.purchase');
});

Route::get('inventory', function(){
	return view('inventory.purchase');
});

Route::get('stock', 'AccountController@inv');


// RMS Route
Route::get('inventory/purchase', 'InventoryController@index');

Route::get('billing', 'BillingController@index');