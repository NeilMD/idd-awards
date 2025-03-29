<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeCapsuleController;

Route::get('/', function () {
    return view('index');
});

Route::view('/awards', 'awards');
Route::view('/general-awards', 'general-awards');
Route::view('/graphic-design', 'graphic-design');
Route::view('/ignite-awards', 'ignite-awards');
Route::view('/user-experience', 'user-experience');
Route::view('/web-development', 'web-development');

Route::get('/time-capsule', [TimeCapsuleController::class,'show']);
Route::post('/time-capsule/submit', [TimeCapsuleController::class,'submit']);

Route::get('/time-capsule/generateUrl', [TimeCapsuleController::class,'generateUrl']);
Route::get('/time-capsule/verify/{email}', [TimeCapsuleController::class,'verify'])->name('verify');
