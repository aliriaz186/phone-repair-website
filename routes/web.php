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
    return view('welcome');
});
Route::get('/contact-us', function () {
    return view('template/frontEnd/pages/contact');
});
Route::get('/shops', function () {
    return view('template/frontEnd/pages/shops');
});
Route::get('/create-products', function () {
    return view('template/frontEnd/pages/products/create-product');
});
Route::get('/book-a-repair', function () {
    return view('template/frontEnd/pages/book-a-repair');
});
Route::get('/book-a-repair/problem/{problem}', function (string $problem) {
    return view('template/frontEnd/pages/select-phone-problem')->with(['problem' => $problem]);
});
Route::get('/book-a-repair/problem/{problem}/phone/{type}','BookARepairController@viewPhoneList');
Route::get('/book-a-repair/problem/{problem}/phone/{type}/{phoneId}/color','BookARepairController@viewPhoneWithAllColors');
Route::get('/book-a-repair/problem/{problem}/phone/{type}/{phoneId}/color/schedule','BookARepairController@viewSchedulePage');
