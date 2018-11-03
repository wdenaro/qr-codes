<?php

Route::get('form', function () {
    return view('form');
    })->name('form.show');


Route::post('qr', 'MainController@index')
    ->name('qr.show');


Route::get('/', function () {
    return view('welcome');
    });
