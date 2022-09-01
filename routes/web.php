<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(Request $request){
    // dd($request->all());
    return $request->naam;
});

// Route::get('/products', [ProductController::class, 'index']);

Route::resource('products', ProductController::class);
