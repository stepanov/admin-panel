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

Route::prefix('v1')->group(function () {
    Route::post('/users', 'App\Http\Controllers\Api\UserController@authentificate');
    Route::put('/users', 'App\Http\Controllers\Api\UserController@initializeGA');
    Route::get('/questionnaires', 'App\Http\Controllers\Api\QuestionnaireController@index');
    Route::put('/questionnaires', 'App\Http\Controllers\Api\QuestionnaireController@process');
    Route::delete('/questionnaires', 'App\Http\Controllers\Api\QuestionnaireController@delete');
    Route::get('/logs', 'App\Http\Controllers\Api\LogController@index');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
