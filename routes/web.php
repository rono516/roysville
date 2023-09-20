<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', function () {

    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('past_events', function () {
    return view('past_events');
});

Route::get('/test', function () {
    return view('test');
});
