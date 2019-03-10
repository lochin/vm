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

Route::get('/', 'PageController@index')->name('index');

Auth::routes();

//Route::get('/admin', 'PageController@admin')->name('admin');
Route::group(['prefix'=>'admin/', 'namespace'=>'admin', 'as'=>'admin.', 'middleware'=>'auth'], function (){
   Route::get('/', 'ApplyController@index')->name('apply.index');
});
Route::get('/admin', 'PageController@admin')->name('admin');
Route::post('/create/message', 'PageController@store')->name('xabar.store');