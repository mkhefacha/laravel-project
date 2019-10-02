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

Route::get('/', function () {
    return view('welcome');
});
//produit
Route::get('liste', 'ProductController@index')->name('produit.liste');
Route::get('produit', 'ProductController@create')->name('produit.create');
Route::post('produit', 'ProductController@store')->name('produit.store');
Route::get('produit/show/{id}', 'ProductController@show')->name('produit.show');
Route::get('produit/edit/{id}', 'ProductController@edit')->name('produit.edit');
Route::post('produit/update/{id}', 'ProductController@update')->name('produit.update');
Route::get('produit/delete/{id}', 'ProductController@destroy')->name('produit.delete');
//category
Route::get('category', 'CategoryController@create')->name('category.create');
Route::post('category', 'CategoryController@store')->name('category.store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hello', 'HomeController@index')->name('home');

get('hi', function()
{

})
//comment