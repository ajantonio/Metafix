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

Route::middleware('guest')->get('/', function () {
    return redirect()->route('login');
    // return view('auth.login');
});

// Route::get('/register', [RegisterController::class, 'create'])
//                 ->middleware('guest')
//                 ->name('register');

// Route::post('/register', [RegisterController::class, 'store'])
//                 ->middleware('guest');

Auth::routes(); 

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/login', [LoginController::class, 'index'])->name('login');
//     Route::get('/register', [LoginController::class, 'register'])->name('register');
// });

/*
 * Set authenticated routes
 */
Route::group(['middleware' => ['auth', 'checkAuthStatus']], function () {

    // Homepage
    Route::get('home', function () {
        if(auth()->user()->is_admin == 0) {
            return view('orthopedicDoctor.home');
        }
        return redirect()->route('admin.home');
    })->name('home');

    // Orthopedic Doctor Routes
    Route::group(['middleware' => ['doctor']], function () {

        // 'Order Orthopedic Implants' Module
        Route::group(['prefix' => 'orderorthopedicimplants'], function () {
            Route::get('/', 'OrthopedicDoctor\OrderOrthopedicImplantController@index')->name('orderorthopedicimplant.home');
            Route::get('/implant/{id}', 'OrthopedicDoctor\OrderOrthopedicImplantController@show')->name('orderorthopedicimplant.show.screw');
            Route::get('/addToCart/{orthopedic_implant}', 'OrthopedicDoctor\CartController@addToCart')->name('orderorthopedicimplant.add.screw.cart');
            Route::get('/checkout/{amount}', 'OrthopedicDoctor\CartController@checkout')->name('orderorthopedicimplant.cart.checkout');
            Route::get('/hospitaladdresses/{id}', 'OrthopedicDoctor\CartController@loadHospitalAddress')->name('orderorthopedicimplant.surgery.address');
            Route::match(['get', 'post'], '/quotation', 'OrthopedicDoctor\CartController@generateQuotation')->name('orderorthopedicimplant.generate.quotation');
        });

        // 'View Cart' module
        Route::group(['prefix' => 'viewcart'], function () {
            Route::get('/', 'OrthopedicDoctor\CartController@showCart')->name('viewcart.home');
            Route::post('/orthopedicimplants/{orthopedic_implant}', 'OrthopedicDoctor\CartController@updateCart')->name('viewcart.update');
            Route::post('/delete/{orthopedic_implant}', 'OrthopedicDoctor\CartController@removeCart')->name('viewcart.remove');
        });
    });

    // Administrator Routes
    Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {

        Route::get('home', [ViewAccounts::class, 'index'])->name('admin.home');
        
        // 'Add Orthopedic Technicians' Module
        Route::group(['prefix' => 'addorthopedictechnicians', 'as' => 'addorthopedictechnicians.'], function () {
            Route::get('/', 'Administrator\AddOrthopedicTechnicians@index')->name('home');
            Route::post('/store', 'Administrator\AddOrthopedicTechnicians@store')->name('store');
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

        // 'View Accounts' Module
        Route::group(['prefix' => 'accounts', 'as' => 'admin.accounts.'], function () {
            Route::get('/', [ApprovalController::class, 'index'])->name('index');
            Route::post('/', [ApprovalController::class, 'changeStatus'])->name('changeStatus');
        });
    });
});
