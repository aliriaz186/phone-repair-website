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

Route::get('/', 'DashboardController@viewDashboard');
Route::get('/contact-us', function () {
    return view('template/frontEnd/pages/contact');
});
//Route::get('/shops', function () {
//    return view('template/frontEnd/pages/shops');
//});
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
Route::get('/book-a-repair/problem/{problem}/phone/{type}/{phoneId}/color/{colorName}/schedule','BookARepairController@viewSchedulePage');
Route::post('/schedule-repair/save','BookARepairController@scheduleARepair');
Route::get('/walk-in-repair','WalkInRepairController@viewWalkInRepairPage');
Route::post('/product/save','ProductController@store');
Route::get('/shops','ProductController@shop');
Route::get('/shops-details/{id}','ProductController@shopDetails');

//admin routes
Route::get('/admin','AdminController@getLoginView');
Route::post('/admin/login','AdminController@login');
Route::get('/admin-dashboard','AdminController@dashboard')->middleware('CheckAuth');
Route::get('/bookings','AdminController@bookings')->middleware('CheckAuth');
Route::get('/bookings/{id}','AdminController@bookingDetails')->middleware('CheckAuth');
Route::post('/bookings/status/update','AdminController@updateStatus');
Route::get('/stores','AdminController@getStores')->middleware('CheckAuth');
Route::get('/products','AdminController@getProducts')->middleware('CheckAuth');
Route::get('/store/new','AdminController@newStore');
Route::get('/product/new','AdminController@newProduct');
Route::get('/product/{id}/delete','AdminController@deleteProduct');
Route::post('/store/save','AdminController@saveStore');
Route::get('/store/{id}/delete','AdminController@deleteStore');
Route::get('/phones','AdminController@getPhones')->middleware('CheckAuth');
Route::get('/phone/new','AdminController@addPhoneView')->middleware('CheckAuth');
Route::post('/phone/save','AdminController@savePhone');
Route::get('/phones/{id}/colors','AdminController@addColorView');
Route::post('/color/save','AdminController@addNewColor');
Route::get('/logout','AdminController@logout');
Route::post('/email/save','DashboardController@emailSave');
Route::get('/newsletter','AdminController@newsletter');
Route::post('message/send','DashboardController@sendMessage');
Route::get('about','DashboardController@aboutUs');
Route::get('admin/about','AdminController@aboutUs');
Route::get('admin/blog','AdminController@blog');
Route::get('blog/new','AdminController@addBlog');
Route::post('blog/save','AdminController@saveBlog');
Route::get('blog/{id}/delete','AdminController@deleteBlog');
Route::post('description/save','AdminController@descriptionSave');
Route::get('show-blogs','DashboardController@showBlog');
Route::get('repair/videos','AdminController@repairVideos');
Route::get('video/new','AdminController@addVideo');
Route::post('video/save','AdminController@saveVideo');
Route::get('video/{id}/delete','AdminController@deleteVideo');
Route::get('show-repair-videos','DashboardController@showRepairVideos');
Route::get('change-credentials','DashboardController@changeCredentialView');
Route::post('change-admin-credentials','DashboardController@changeCredentials');
