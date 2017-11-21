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

Route::resource('member','MemberController');

Route::resource('group','GroupController');
Route::get('group/view-share/{id}','GroupController@share');

Route::resource('payment','PaymentController');
Route::post('payment','PaymentController@search');