<?php

use Illuminate\Support\Facades\Route;

//import controller product
use App\Http\Controllers\ProductController;

//route resource product
Route::resource('/products',ProductController::class);

Route::get('/', function () {
    return view('welcome');
});
