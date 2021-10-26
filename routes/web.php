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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

// Orthopedic Doctor Routes
Route::group(['middleware' => ['auth', 'doctor']], function () {

    // Homepage
    Route::get('/home', function () {
        return view('orthopedicDoctor.home');
    });

    // 'Order Orthopedic Implants' Module
    Route::group(['prefix' => 'orderorthopedicimplants'], function () {
        Route::get('/', 'OrthopedicDoctor\OrderOrthopedicImplantController@index')->name('orderorthopedicimplant.home');
        Route::get('/implant/{id}', 'OrthopedicDoctor\OrderOrthopedicImplantController@show')->name('orderorthopedicimplant.show.screw');
        Route::get('/addToCart/{orthopedic_implant}', 'OrthopedicDoctor\CartController@addToCart')->name('orderorthopedicimplant.add.screw.cart');
        Route::get('/checkout/{amount}', 'OrthopedicDoctor\CartController@checkout')->name('orderorthopedicimplant.cart.checkout');
    });

    // 'View Cart' module
    Route::group(['prefix' => 'viewcart'], function () {
        Route::get('/', 'OrthopedicDoctor\CartController@showCart')->name('viewcart.home');
        Route::post('/orthopedicimplants/{orthopedic_implant}', 'OrthopedicDoctor\CartController@updateCart')->name('viewcart.update');
        Route::post('/delete/{orthopedic_implant}', 'OrthopedicDoctor\CartController@removeCart')->name('viewcart.remove');
    });
});

// Administrator Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    // Homepage
    Route::get('/home', function () {
        return view('admin.home');
    });

    // 'Add Orthopedic Technicians' Module
    Route::group(['prefix' => 'addorthopedictechnicians'], function () {
        Route::get('/', 'Administrator\AddOrthopedicTechnicians@index')->name('addorthopedictechnicians.home');
        Route::post('/store', 'Administrator\AddOrthopedicTechnicians@store')->name('addorthopedictechnicians.store');
    });

    // 'View Orthopedic Technicians' Module
    Route::group(['prefix' => 'vieworthopedictechnicians'], function () {
        Route::get('/', 'Administrator\ViewOrthopedicTechnicians@index')->name('vieworthopedictechnicians.home');
    });

    // 'View Inventory' Module
    Route::group(['prefix' => 'viewinventory'], function () {
        Route::get('/', 'Administrator\ViewInventory@index')->name('viewinventory.view');
    });

    // 'Add Orthopedic Implants' Module
    Route::group(['prefix' => 'addorthopedicimplants'], function () {
        Route::get('/', 'Administrator\AddOrthopedicImplants@index')->name('addorthopedicimplants.home');
        Route::post('/store', 'Administrator\AddOrthopedicImplants@store')->name('addorthopedicimplants.store');
    });
});
