<?php

use carbon\carbon;
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
    return view('home');
});
Route::get('test', function () {
    $date=carbon::now();
    dump($date);
});

//produit
Route::get('liste', 'ProductController@index')->name('produit.liste');//->middleware('role:editor|admin|writer');
Route::get('userliste', 'ProductController@listeuser');

Route::get('produit', 'ProductController@create')->name('produit.create');//->middleware('role:writer|admin');
Route::post('produit', 'ProductController@store')->name('produit.store');
Route::get('produit/show/{product}', 'ProductController@show')->name('produit.show');
Route::get('produit/edit/{product}', 'ProductController@edit')->name('produit.edit');//->middleware('role:editor|admin');
Route::put('produit/update/{product}', ['uses'=>'ProductController@update','as'=>'produit.update']);
Route::delete('produit/delete/{id}', 'ProductController@destroy');
Route::post('category/delete/{category}', 'ProductController@supprimer')->name('category.delete');



//category
Route::get('category', 'CategoryController@create')->name('category.create');
Route::post('category', 'CategoryController@store')->name('category.store');

//user

Route::get('login', 'LoginController@create')->name('login');
Route::post('login', 'LoginController@store');
Route::post('logout', 'LoginController@destroy')->name('logout');

Route::get('register', 'RegisterController@showRegistrationForm');
Route::Post('register', 'RegisterController@store')->name('register');

Route::get('confirmation/{user}/{token}', 'ConfirmationController@store')->name('confirmation');


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
;

Route::get('/hello', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');

//session route
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');


Auth::routes();

Route::get('/collection', 'CollectionController@index');


Route::get('/home', 'HomeController@index')->name('home');
