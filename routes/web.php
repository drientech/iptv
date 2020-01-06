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

// Route::get('/', function () {

//     return view('welcome');


// });
 
 
 Route::get('list1.m3u', function () {

    return view('welcome');


});

 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/')->group(function() {
 
 Route::get('/', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
 

 });
 
 

  Route::get('get', 'DownloadFile@download')->name('get');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');


});