<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('articles', ArticleController::class)->names([
    'index' => 'api.articles.index',
    'store' => 'api.articles.store',
    'show' => 'api.articles.show',
    'update' => 'api.articles.update',
    'destroy' => 'api.articles.destroy',
]);

