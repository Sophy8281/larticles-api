<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List articles
Route::get('articles', 'App\http\controllers\ArticleController@index');

// List a single article
Route::get('article/{id}', 'App\http\controllers\ArticleController@show');

// Create a new article
Route::post('article', 'App\http\controllers\ArticleController@store');

// Update an article
Route::put('article', 'App\http\controllers\ArticleController@store');

// Delete an article
Route::delete('article/{id}', 'App\http\controllers\ArticleController@destroy');
