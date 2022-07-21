<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/su-kien',[App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/show/{id}',[App\Http\Controllers\EventController::class, 'show'])->name('event.show');


Route::get('/lien-he',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/send-mail',[App\Http\Controllers\HomeController::class, 'sendMail'])->name('sendmail');

// Route::get('/thanh-toan',function(){
//     return view('checkout.checkout');
// });

Route::post('/thanh-toan',[App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/payment',[App\Http\Controllers\CheckoutController::class, 'payment'])->name('payment');

Route::get('ticket',function(){
    return view('ticket');
});
Route::get('qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});