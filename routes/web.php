<?php

use App\Http\Controllers\Administrator\ApprovalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Administrator\ViewAccounts;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');

Route::get('/login', function () {
    return view('auth.login');
});


Auth::routes();



// Orthopedic Doctor Routes
Route::group(['middleware' => ['auth', 'doctor']], function () {

    // Homepage
    Route::get('/home', function () {
        return view('orthopedicDoctor.home');
    })->name('orthopedicDoctor.home');

    // 'Order Orthopedic Implants' Module
    Route::group(['prefix' => 'orderorthopedicimplants', 'namespace' => 'OrthopedicDoctor', 'as' => 'orderorthopedicimplant.'], function () {
        Route::get('/', 'OrderOrthopedicImplantController@index')->name('home');
        Route::get('/implant/{id}', 'OrderOrthopedicImplantController@show')->name('screw');
        Route::get('/addToCart/{orthopedic_implant}', 'CartController@addToCart')->name('add.screw.cart');
        Route::get('/checkout/{amount}', 'CartController@checkout')->name('cart.checkout');
        Route::get('/hospitaladdresses/{id}', 'CartController@loadHospitalAddress')->name('surgery.address');
        Route::match(['get', 'post'], '/quotation', 'CartController@generateQuotation')->name('generate.quotation');
    });

    // 'View Cart' module
    Route::group(['prefix' => 'viewcart', 'namespace' => 'OrthopedicDoctor', 'as' => 'viewcart.'], function () {
        Route::get('/', 'CartController@showCart')->name('home');
        Route::post('/orthopedicimplants/{orthopedic_implant}', 'CartController@updateCart')->name('update');
        Route::post('/delete/{orthopedic_implant}', 'CartController@removeCart')->name('remove');
    });
});

// Administrator Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    // Homepage
    // admin/home
    Route::get('/home', function () {
        return view('admin.home');
    });

    // 'Add Orthopedic Technicians' Module
    Route::group(['prefix' => 'addorthopedictechnicians', 'namespace' => 'Administrator', 'as' => 'addorthopedictechnicians.'], function () {
        Route::get('/', 'AddOrthopedicTechnicians@index')->name('home');
        Route::post('/store', 'AddOrthopedicTechnicians@store')->name('store');
    });

    // 'View Orthopedic Technicians' Module
    Route::group(['prefix' => 'vieworthopedictechnicians', 'namespace' => 'Administrator', 'as' => 'vieworthopedictechnicians.'], function () {
        Route::get('/', 'ViewOrthopedicTechnicians@index')->name('home');
        Route::post('/delete/{orthopedic_technician}', 'ViewOrthopedicTechnicians@destroy')->name('delete');
        Route::get('/edit/{orthopedic_technician}', 'ViewOrthopedicTechnicians@edit')->name('edit');
        Route::put('/update/{orthopedic_technician}', 'ViewOrthopedicTechnicians@update')->name('update');
    });

    // 'View Inventory' Module
    Route::group(['prefix' => 'viewinventory', 'namespace' => 'Administrator', 'as' => 'viewinventory.'], function () {
        Route::get('/', 'ViewInventory@index')->name('view');
        Route::post('/delete/{orthopedic_implant}', 'ViewInventory@destroy')->name('delete');
        Route::get('/edit/{orthopedic_implant}', 'ViewInventory@edit')->name('edit');
        Route::put('/update/{orthopedic_technician}', 'ViewInventory@update')->name('update');
    });

    // 'Add Orthopedic Implants' Module
    Route::group(['prefix' => 'addorthopedicimplants', 'namespace' => 'Administrator', 'as' => 'addorthopedicimplants.'], function () {
        Route::get('/', 'AddOrthopedicImplants@index')->name('home');
        Route::post('/store', 'AddOrthopedicImplants@store')->name('store');
    });

    // 'View Accounts' Module
    Route::group(['prefix' => 'accounts', 'namespace' => 'Administrator', 'as' => 'admin.accounts.'], function () {
        Route::get('/', 'ApprovalController@index')->name('index');
        Route::post('/', 'ApprovalController@changeStatus')->name('changeStatus');
    });
});
