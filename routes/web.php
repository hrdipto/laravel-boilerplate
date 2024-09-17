<?php

use App\Http\Controllers\BankAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/secret', function () {
    return view('brazzers.index');
});

Route::get('/public', function () {
    return view('brazzers.public');
});


Route::get('/register', [RegistrationController::class, 'get_req']);
Route::post('/register', [RegistrationController::class, 'post_req']);
Route::post('/register', [RegistrationController::class, 'put_req']);

Route::get('/bank_account', [BankAccountController::class, 'get_req']);
