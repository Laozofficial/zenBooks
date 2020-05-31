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

Route::get('/', 'AnyController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/index', 'AdminController@index')->name('admin-home');

Route::post('/admin/index', 'AdminController@store');

Route::get('/admin/books', 'AdminController@books');

Route::get('/admin/delete/book/{id}', 'AdminController@destroy');

Route::get('/admin/books/update/{id}', 'AdminController@update');

Route::post('/admin/books/update/{id}', 'AdminController@updateLogic');

Route::get('/admin/payments', 'PaymentController@allPayments');

Route::get('/admin/profile', 'AdminController@profile');

Route::post('/admin/profile', 'AdminController@updateProfile');

Route::post('/admin/update/password', 'AdminController@updatePassword');

// none admin routes
Route::get('/get/book/{id}', 'AnyController@bookDetails');

Route::post('/get/book/file/{id}', 'AnyController@bookFile');

Route::get('/download-file/{id}', 'AnyController@downloadFile');