<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;

Route::get('/', [DemoController::class, 'home']);
Route::get('/about', [DemoController::class, 'about']);

Route::get('/course', SingleActionController::class);