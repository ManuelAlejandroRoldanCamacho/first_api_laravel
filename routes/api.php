<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\API\AuthController;

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}', [ArticleController::class, 'show']);
Route::post('articles', [ArticleController::class, 'create']);
Route::put('articles/{article}', [ArticleController::class, 'update']);
Route::delete('articles/{article}', [ArticleController::class, 'destroy']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);