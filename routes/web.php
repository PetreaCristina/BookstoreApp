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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',  'HomeController@index')->name('home');
Route::get('/roles', 'HomeController@createRoles')->name('createRoles');
Route::get('/book/add', 'BooksController@getAdd')->name('getAddBook');
Route::post('/book/add', 'BooksController@postAdd')->name('postAddBook');

Route::get('/book/edit/{id}', 'BooksController@edit')->name('edit');
Route::PATCH('/book/update/{id}','BooksController@update')->name('update');
Route::get('/book/list', 'BooksController@getList')->name('getListBook');


Route::delete('/delete/{id}', 'BooksController@delete')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
