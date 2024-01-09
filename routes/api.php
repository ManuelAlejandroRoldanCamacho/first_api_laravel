<?php

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Type\Integer;

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

Route::get('article', function (){
    return Article::all();    
});

Route::get('article/{id}', function ($id){
    return Article::find($id);    
});

Route::post('article', function (Request $request){
    return Article::create($request->all());    
});

Route::put('article/{id}', function (Request $request, $id){
    $article = Article::find($id);
    $article->update($request->all());
    return $article;    
});

Route::delete('article/{id}', function($id){
    Article::find($id)->delete();
    return 204;
});