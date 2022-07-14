<?php

use App\Http\Controllers\Api\ApiSampahController;
use App\Http\Controllers\Api\AuthUserController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware(['auth:sanctum', 'type.user'])->group(function () {
    Route::get('/dashboard', function () {
        return "aaa";
    });
    Route::post('/user/logout', [AuthUserController::class, 'logout']);
});
Route::middleware(['auth:sanctum', 'type.driver'])->group(function () {
    Route::get('/driver', function () {
        return "aaa";
    });
});

Route::get('/user/verify', [AuthUserController::class, 'verify'])->name('verification.verify');
Route::post('/user/login', [AuthUserController::class, 'login']);
Route::post('/user/register', [AuthUserController::class, 'register']);

// Route::get('/dashboard', function () {
//     return "aaa";
// });
