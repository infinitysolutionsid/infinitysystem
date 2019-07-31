<?php

use Carbon\Traits\Rounding;
use App\Http\Controllers\Item_Controller;

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

Route::get('/', 'AuthController@login');
Route::get('/signin', 'AuthController@login')->name('signin');
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');

// ROUTE GROUP ADMINISTRATOR
Route::group(['middleware' => ['auth', 'checkType:administrator,manager']], function () {

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/member', function () {
        return view('member.index');
    });
    Route::get('/customer', function () {
        return view('customer.index');
    });
    Route::get('/item', function () {
        return view('item.index');
    });
    Route::get('/so', function () {
        return view('salesorder.index');
    });

    Route::get('/add-user', function () {
        return view('adduser');
    });
    Route::get('/authority', function () {
        return view('authority');
    });
    Route::get('/add-authority', function () {
        return view('addauthority');
    });
    Route::get('/so', function () {
        return view('salesorder.index');
    });

    Route::get('/add-sales-order', function () {
        return view('addsalesorder');
    });
    Route::get('/sales-invoices', function () {
        return view('salesinvoices.index');
    });
    Route::get('/add-sales-invoices', function () {
        return view('addsalesinvoices');
    });
    Route::get('/receipts', function () {
        return view('receipts');
    });
    Route::get('/sales-order-report', function () {
        return view('salesorderreport');
    });
    Route::get('/sales-invoices-report', function () {
        return view('salesinvoicesreport');
    });
    Route::get('/check-in-report', function () {
        return view('checkinreport');
    });

    // ROute VIEW
    Auth::routes();
    Route::get('/member', 'MemberController@index');
    Route::get('/so', 'So_Controller@index');
    Route::get('/sales-invoices', 'Si_Controller@index');
    Route::get('/customer', 'Cust_Controller@index');
    Route::get('/item', 'Item_Controller@index');

    // ROUTE POST
    Route::post('/member/create', 'MemberController@create');
    Route::post('/salesorder/create', 'So_Controller@create');
    Route::post('/so/create', 'So_Controller@itemadd');
    Route::post('/customer/create', 'Cust_Controller@create');
    Route::post('/item/create', 'Item_Controller@create');

    //ROUTE GET/UPDATE
    Route::get('/member/{id}/edit', 'MemberController@edit');
    Route::post('/member/{id}/update', 'MemberController@update');
    Route::get('/so/{so_id}/edit', 'So_Controller@edit');
    Route::post('/so/{so_id}/update', 'So_Controller@update');
    Route::get('/customer/{customer_id}/edit', 'Cust_Controller@edit');
    Route::post('/customer/{customer_id}/update', 'Cust_Controller@update');
    Route::get('/item/{item_id}/edit', 'Item_Controller@edit');
    Route::post('/item/{item_id}/update', 'Item_Controller@update');

    // ROUTE DETAILS
    Route::get('/so/{so_id}/details', 'So_Controller@details');
    // Route::post('/so/{so_id}/update', 'So_Controller@update');

    // ROUTE DELETE
    Route::get('/member/{id}/delete', 'MemberController@delete');
    Route::get('/so/{so_id}/delete', 'So_Controller@delete');
    Route::get('/customer/{customer_id}/delete', 'Cust_Controller@delete');
    Route::get('/item/{item_id}/delete', 'Item_Controller@delete');
});

// // ROUTE GROUP MANAGER
// Route::group(['middleware' => ['auth', 'checkType:manager']], function () { });
