<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group([
    'middleware' => 'api',
    // below line defines the limit to each request i.e. 10 request every 1 minute
    'throttle' => '10, 1', 
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    // using below enpoint you can recall/expired token
    Route::post('/refresh', [AuthController::class, 'refresh']);
});

// public endpoint to validate token - need to pass token to validate the same
// on success it will return user object 
Route::post('/validate/token', [AuthController::class, 'userProfile']);
