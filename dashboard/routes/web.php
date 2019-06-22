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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/user', function () {
    return view('user');
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
