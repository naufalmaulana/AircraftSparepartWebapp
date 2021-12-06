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


Route::get('/ForgotPassword','App\Http\Controllers\UserController@forgotPassword')->name('forgotPassword');
Route::get('/ResetPassword','App\Http\Controllers\UserController@resetPassword')->name('resetPassword');

Route::middleware('auth.JWT')->group(function () {
    Route::get('/','App\Http\Controllers\HomeController@landing')->name('home');

    Route::get('/HomeVendor','App\Http\Controllers\HomeController@supplierLanding')->name('supplierLanding');
    Route::get('/HomeManufacture','App\Http\Controllers\HomeController@mroLanding')->name('mroLanding');
    Route::get('/SparepartsCatalogue','App\Http\Controllers\SparepartsController@spareparts')->name('spareparts');
    Route::get('/SparepartDetails','App\Http\Controllers\SparepartsController@sparepartDetails')->name('sparepartDetails');
    Route::get('/ShoppingCart','App\Http\Controllers\CartController@cart')->name('cart');
    Route::get('/MyOrder','App\Http\Controllers\MyorderController@myorder')->name('myorder');
    Route::get('/OwnedItemDetails','App\Http\Controllers\MyorderController@ownedDetails')->name('ownedDetails');
    Route::get('/MaintenanceList','App\Http\Controllers\MaintenanceController@maintenance')->name('maintenance');
    Route::get('/Tracking','App\Http\Controllers\TrackingController@tracking')->name('tracking');
    Route::get('/TrackingOrder','App\Http\Controllers\TrackingController@trackingOrder')->name('trackingOrder');

});


