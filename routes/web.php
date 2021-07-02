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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','PagesController@index')->name('home');
Route::get('/admin/dashbord','PagesController@dashbord')->name('admin.dashbord');
Route::get('/admin/main','MainController@main')->name('admin.main');
Route::put('/admin/main','MainController@update')->name('admin.main.update');
Route::get('/admin/services/create','ServiceController@create')->name('admin.service.create');
Route::post('/admin/services/store','ServiceController@store')->name('admin.service.store');
Route::get('/admin/services/list','ServiceController@show')->name('admin.service.list');
Route::get('/admin/services/edit/{id}','ServiceController@edit')->name('admin.service.edit');
Route::post('/admin/services/update/{id}','ServiceController@update')->name('admin.service.update');
Route::get('/admin/services/delete/{id}','ServiceController@destroy')->name('admin.service.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
