<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'Centerpoint\Reader\Http\Controllers'], function() {
    Route::get('reader', 'ReaderController@index')->name('reader.route');
});
