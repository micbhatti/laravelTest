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


Auth::routes();
Route::get('/', 'AwardController@index');
Route::get('/home', 'AwardController@index')    
    ->name('home');
Route::get('/awards', 'AwardController@index')->name('award.all');
Route::get('/search', 'AwardController@search')->name('award.search');
Route::group(['middleware' => ['is_admin']], function () {
    Route::get('/award/create', 'AwardController@create')->name('award.create');
    Route::post('/award/create', 'AwardController@store')->name('award.store');
    Route::get('/award/edit/{id}', 'AwardController@edit')->name('award.edit');
    Route::post('/award/edit/{id}', 'AwardController@update')->name('award.update');
    Route::get('/award/delete/{id}', 'AwardController@destroy')->name('award.delete');
    });