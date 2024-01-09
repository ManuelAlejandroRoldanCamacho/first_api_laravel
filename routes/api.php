<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('articles', [ArticleController::class, 'index']);

Route::get('articles/{article}', [ArticleController::class, 'show']);

Route::post('articles', [ArticleController::class, 'create']);

Route::put('articles/{article}', [ArticleController::class, 'update']);

Route::delete('articles/{article}', [ArticleController::class, 'destroy']);