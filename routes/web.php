<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page', 'breadcrumb' => 'Home']);
});

//Route::get('/writer','WriterController@index');

Route::get('/book', function () {
    return view('book.index', ['title' => 'Book Page', 'breadcrumb' => 'Home / Book Page']);
});

Route::get('/writer', function () {
    return view('writer.index', ['title' => 'Writer Page', 'breadcrumb' => 'Home / Writer Page']);
});