<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

Route::resource('listapp', ListController::class);
// Route::get('/', function () {
//     return view('listapp.index');
// });

Route::get('mutant-create','App\Http\Controllers\ListController@create');
Route::get('mutant-index','App\Http\Controllers\ListController@index');
Route::get('mutant-edit','App\Http\Controllers\ListController@edit');
Route::get('mutant-update','App\Http\Controllers\ListController@update');
Route::get('mutant-destroy','App\Http\Controllers\ListController@destroy');
Route::get('/','App\Http\Controllers\ListController@index');
