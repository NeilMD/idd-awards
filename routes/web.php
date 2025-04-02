<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeCapsuleController;

Route::get('/', function () {
    return view('index');
});

Route::view('/awards', 'awards');
Route::view('/impact-awards', 'impact-awards');
Route::view('/graphic-design', 'graphic-design');
Route::view('/ignite-awards', 'ignite-awards');
Route::view('/user-experience', view: 'user-experience');
Route::view('/web-development', 'web-development');

Route::get('/time-capsule', [TimeCapsuleController::class,'show']);
Route::post('/time-capsule/submit', [TimeCapsuleController::class,'submit']);
Route::get('/time-capsule/load-more', [TimeCapsuleController::class, 'loadMore'])->name('loadMore');

// Signed Route for Upload Verification
Route::post('/time-capsule/verify/{email}', [TimeCapsuleController::class,'verify'])->name('verify');
Route::get('/time-capsule/confirmation/{email}',  [TimeCapsuleController::class,'confirm'])->name('confirm');

Route::get('/time-capsule/generateUrl', [TimeCapsuleController::class,'generateUrl']);
Route::view('/time-capsule/email', 'components.email.design-verification', [
    'designTitle' => 'Futuristic UI Design',
    'category' => 'UX Design',
    'description' => 'This design explores futuristic interfaces with smooth transitions and interactive elements.',
    'designImageUrl' => 'https://example.com/images/design.jpg', // You can use a placeholder image URL here
    'verificationUrl' => 'https://example.com/verifyverifyverifyverifyverifyverifyverifyverify?email=dummy@edu.sait.ca'
]);


