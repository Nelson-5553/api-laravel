<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\posts\PostController;
use App\Http\Controllers\Api\login\LoginController;
use App\Http\Controllers\Api\categories\CategoryController;
use App\Http\Controllers\Api\login\SigninController;



//Tips
Route::apiResource('posts', PostController::class)->only('index', 'show', 'destroy', 'store')->middleware('auth:sanctum');
Route::get('home', [PostController::class, 'Home']);

//Login
// obtener el usuario de la cookie
Route::get('login', [LoginController::class, 'user'])->name('user')->middleware('auth:sanctum');

// realizar inicio de sesion
Route::post('login', [LoginController::class, 'login'])->name('login');

// Realizar cierre de sesion
Route::middleware('auth:sanctum')->post('logout', [LoginController::class, 'logout']);

// Registro
Route::post('signin', [SigninController::class, 'store']);

//  Categorias
Route::get('categories', [CategoryController::class, 'index']);

