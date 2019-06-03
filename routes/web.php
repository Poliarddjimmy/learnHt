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

Route::get('/courses/show/{id}/', 'CoursController@blo');
Route::get('/courses/show/{non}/{tit}/', 'CoursController@show');
Route::get('/courses', 'CoursController@index');
Route::get('/ajouter-un-cours', 'CoursController@add');
Route::get('/ajouter-un-module/{id}/{nom}', 'CoursController@module');
Route::post('/create', 'CoursController@create');
Route::post('/addmodule', 'CoursController@addmodule');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
