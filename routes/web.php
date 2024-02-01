<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;


Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/customer', function(){
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});