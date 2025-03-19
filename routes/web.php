<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/awards', 'awards');
Route::view('/general-awards', 'general-awards');
Route::view('/graphic-design', 'graphic-design');
Route::view('/ignite-awards', 'ignite-awards');
Route::view('/time-capsule', 'time-capsule');
Route::view('/user-experience', 'user-experience');
Route::view('/web-development', 'web-development');
