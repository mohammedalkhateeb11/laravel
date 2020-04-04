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
Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services', 'PageController@service');
Route::resource('ajaxproducts','ProductAjaxController');
Route::get('image_crop','ImageCropController@index');
Route::post('image_crop/upload', 'ImageCropController@upload')->name('image_crop.upload');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


