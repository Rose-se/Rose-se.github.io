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
Route::get('mutant-destory','App\Http\Controllers\ListController@destory');
Route::get('/','App\Http\Controllers\ListController@index');
Route::controller(ImageController::class)->group(function(){
    Route::get('/image-upload', 'index')->name('image.form');
    Route::post('/upload-image', 'storeImage')->name('image.store');
    });