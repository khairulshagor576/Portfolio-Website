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

Route::prefix('admin')->group(function(){
    Route::get('/dashbord','PagesController@dashbord')->name('admin.dashbord');
    Route::get('/main','MainController@main')->name('admin.main');
    Route::put('/main','MainController@update')->name('admin.main.update');
    //Service's Route:
    Route::get('/service/create','ServiceController@create')->name('admin.service.create');
    Route::post('/service/store','ServiceController@store')->name('admin.service.store');
    Route::get('/service/list','ServiceController@show')->name('admin.service.list');
    Route::get('/service/edit/{id}','ServiceController@edit')->name('admin.service.edit');
    Route::post('/service/update/{id}','ServiceController@update')->name('admin.service.update');
    Route::get('/service/delete/{id}','ServiceController@destroy')->name('admin.service.delete');
    //Porfolio's Route:
    Route::get('/portfolio/create','PortfolioController@create')->name('admin.portfolio.create');
    Route::put('/portfolio/store','PortfolioController@store')->name('admin.portfolio.store');
    Route::get('/portfolio/list','PortfolioController@show')->name('admin.portfolio.list');
    Route::get('/portfolio/edit/{id}','PortfolioController@edit')->name('admin.portfolio.edit');
    Route::post('/portfolio/update/{id}','PortfolioController@update')->name('admin.portfolio.update');
    Route::get('/portfolio/delete/{id}','PortfolioController@destroy')->name('admin.portfolio.delete');

    //About's Route:
    Route::get('/about/create','AboutController@create')->name('admin.about.create');
    Route::put('/about/store','AboutController@store')->name('admin.about.store');
    Route::get('/about/list','AboutController@show')->name('admin.about.list');
    Route::get('/about/edit/{id}','AboutController@edit')->name('admin.about.edit');
    Route::post('/about/update/{id}','AboutController@update')->name('admin.about.update');
    Route::get('/about/delete/{id}','AboutController@destroy')->name('admin.about.delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
