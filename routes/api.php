<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\posts\PostController;
use App\Http\Controllers\Api\login\LoginController;
use App\Http\Controllers\Api\categories\CategoryController;
use App\Http\Controllers\Api\login\SigninController;



//V2
Route::apiResource('posts', PostController::class)->only('index', 'show', 'destroy', 'store')->middleware('auth:sanctum');
Route::get('home', [PostController::class, 'Home']);

//Login

Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->post('logout', [LoginController::class, 'logout']);

//  Categorias   */

Route::get('categories', [CategoryController::class, 'index']);

Route::post('signin', [SigninController::class, 'store']);
