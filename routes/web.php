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
// Route::get('/', 'ReceipeController@index');

// Route::get('receipe', 'ReceipeController@index'); 
// Route::get('create_receipe', 'ReceipeController@createreceipeForm'); 
// Route::get('receipe/{id}', 'ReceipeController@show'); 
// Route::post('receipe', 'ReceipeController@create'); 
// Route::get('receipe/{id}/edit', 'ReceipeController@edit'); 
// Route::patch('receipe/{id}', 'ReceipeController@update'); 
// Route::delete('receipe/{id}', 'ReceipeController@delete'); 

Route::resource('receipe', 'ReceipeController');

// get all index page (GET) receipe
// create form (GET) receipe/create
// show data (GET) receipe/1
// create receipe (POST) receipe
// edit form (GET) receipe/1/
// delete receipe (DELETE) receipe/1/