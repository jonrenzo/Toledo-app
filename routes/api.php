<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    echo 'Welcome API - Test Middleware';
})->middleware('auth:sanctum');
