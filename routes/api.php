<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieLikeController;
use App\Http\Controllers\CommentController;
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

Route::resources([
    'user' => UserController::class,
    'movies' => MovieController::class
]);
Route::post('login', [AuthController::class, 'login']);
Route::group([
    'middleware' => 'auth:api'
], function() {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('likeDislike', [UserController::class], 'LikeDislikeMovie');
    Route::resources([
        'likeMovie' => MovieLikeController::class,
        'commentMovie' => CommentController::class
    ]);
});

