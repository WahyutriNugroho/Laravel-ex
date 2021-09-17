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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'user\HomeController@index')->name('home');

Route::get('/details/{slug}', 'user\DetailsController@index')
    ->name('details')->middleware(['auth', 'verified']);

// menrima data dari details status menjadi IN_CART
Route::post('/checkout/{id}', 'user\CheckoutController@process')
    ->name('checkout-process')->middleware(['auth', 'verified']);

// Menerima data dari checkout-process status menjadi PENDING 
Route::get('/checkout/{id}', 'user\CheckoutController@index')
    ->name('checkout')->middleware(['auth', 'verified']);

// menambahkan orang
Route::post('/checkout/create/{detail_id}', 'user\CheckoutController@create')
    ->name('checkout-create')->middleware(['auth', 'verified']);
// mengahpus orang
Route::get('/checkout/remove/{detail_id}', 'user\CheckoutController@remove')
    ->name('checkout-remove')->middleware(['auth', 'verified']);

// Routing halaman success 
Route::get('/checkout/confirm/{id}', 'user\CheckoutController@success')
    ->name('checkout-success')->middleware(['auth', 'verified']);


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth', 'admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('travel-package', 'TravelPackagesController');
        Route::resource('transaction', 'TransactionController');
        Route::resource('gallery', 'GalleryController');
    });

Auth::routes(['verify' => true]);
