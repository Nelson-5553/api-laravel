<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\posts\PostController;
use App\Http\Controllers\Api\login\LoginController;



// Route::get('/user', function (Request $request) {
    //     return $request->user();
    // })->middleware('auth:sanctum');

//V1
    // Route::apiResource('v1/posts', PostV1::class)->only('index', 'show', 'destroy')->middleware('auth:sanctum');

//V2
    Route::apiResource('posts', PostController::class)->only('index', 'show', 'destroy', 'store')->middleware('auth:sanctum');

//Login

Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->post('logout', [LoginController::class, 'logout']);
