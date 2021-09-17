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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// memanggil Controller HomeController@index
Route::get('/', 'HomeController@index')->name('Home');

// memanggil ControllerDetails@index
Route::get('/detail/{slug}', 'DetailsController@index')->name('Details');

// checkout
Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth', 'verified']);

// menerima id transaksi dari checkout_process
Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth', 'verified']);

// routing untuk menambahkan orang 
Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout_create')
    ->middleware((['auth', 'verified']));

// menghapus orang
Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->name('checkout_remove')
    ->middleware((['auth', 'verified']));

// kon
Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout_success')
    ->middleware((['auth', 'verified']));
// end checkout



/*
// memanggil ControllerCheckout@index
Route::get('/checkout', 'CheckoutController@index')->name('Checkout');

// memanggil SuccessController@index
Route::get('/checkout/success', 'CheckoutController@success')->name('Checkout-Success');
*/

// memberikan prefix url dengan "admin" yang artinya apapun url tujuan akan selalu diawali 'admin/..../
Route::prefix('admin')
    // namaspace Admin sesuai dengan namespace yang ada pada Controllernya
    ->namespace('Admin')
    ->middleware('auth', 'admin') // menambahkan middleware auth(authenticate) dan admin(IsAdmin) di diassign di kernel.php
    ->group(function () {
        // memanggil fungsi yang sudah diassign di Controller
        Route::get('/', 'DashboardController@index')
            // menamai route agar memudahkan untuk dipahami tujuan route
            ->name('dashboard');

        // mendaftarkan travel-package dan controller
        Route::resource('travel-package', 'TravelPackageController');
        // mendaftarkan gallery dan controller
        Route::resource('gallery', 'GalleryController');
        // mendaftarkan transaction dan controller
        Route::resource('transaction', 'TransactionController');
    });

// menambahkan verifikasi email
Auth::routes(['verify' => true]);
