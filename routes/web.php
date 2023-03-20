<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('customer/register',[RegisterController::class,'registerPage']);

Route::post('customer/insert',[RegisterController::class,'insert']);


Route::get('customer/read',[RegisterController::class,'read']);
