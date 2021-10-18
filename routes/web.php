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
    });
});

// Administrator Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    //Homepage
    Route::get('/home', function () {
        return view('admin.home');
    });
});
