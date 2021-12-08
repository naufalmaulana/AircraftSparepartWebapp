<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/login','App\Http\Controllers\UserController@login')->name('login');
Route::get('/register','App\Http\Controllers\UserController@register')->name('register');
Route::post('/register', 'App\Http\Controllers\UserController@storeRegister')->name('storeRegister');
Route::post('/login', 'App\Http\Controllers\UserController@storeLogin')->name('storeLogin');

Route::middleware('auth.JWT')->group(function () {
    Route::get('/','App\Http\Controllers\HomeController@landing')->name('home');
    Route::get('/history/{id}','App\Http\Controllers\SparepartsController@history')->name('history');
    Route::get('/asset/{id}','App\Http\Controllers\SparepartsController@detail')->name('sparepartDetail');
    Route::post('/buy/{id}', 'App\Http\Controllers\SparepartsController@buy')->name('buy');

    Route::get('/HomeVendor','App\Http\Controllers\HomeController@supplierLanding')->name('supplierLanding');
    Route::get('/HomeManufacture','App\Http\Controllers\HomeController@mroLanding')->name('mroLanding');
    Route::get('/SparepartsCatalogue','App\Http\Controllers\SparepartsController@spareparts')->name('spareparts');
    Route::get('/ShoppingCart','App\Http\Controllers\CartController@cart')->name('cart');
    Route::get('/MyOrder','App\Http\Controllers\MyorderController@myorder')->name('myorder');
    Route::get('/OwnedItemDetails','App\Http\Controllers\MyorderController@ownedDetails')->name('ownedDetails');
    Route::get('/MaintenanceList','App\Http\Controllers\MaintenanceController@maintenance')->name('maintenance');
    Route::get('/tracking','App\Http\Controllers\TrackingController@tracking')->name('tracking');
    Route::get('/TrackingOrder','App\Http\Controllers\TrackingController@trackingOrder')->name('trackingOrder');

});


