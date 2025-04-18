<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
use App\Http\Controllers\Api\LoginController;



// Route::get('/user', function (Request $request) {
    //     return $request->user();
    // })->middleware('auth:sanctum');

//V1
    Route::apiResource('v1/posts', PostV1::class)->only('index', 'show', 'destroy')->middleware('auth:sanctum');

//V2
    Route::apiResource('v2/posts', PostV2::class)->only('index', 'show', 'destroy', 'store')->middleware('auth:sanctum');

//Login

    Route::post('login', [LoginController::class, 'login']);
