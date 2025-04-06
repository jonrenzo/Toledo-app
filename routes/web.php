<?php

use App\Http\Controllers\UserController;
use App\Services\UserService;
use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Test Container
Route::get('/test-container', function (Request $request) {
    return $request->input('key');
});

// Test Provider
Route::get('/test-provider', function (UserService $userService) {
    dd($userService->listUsers());
});

// Test Users
Route::get('/test-users', [UserController::class, 'index']);

// Test Facade
Route::get('/test-facade', function (UserService $userService) {
    dd(\Illuminate\Support\Facades\Response::json($userService->listUsers()));
});


