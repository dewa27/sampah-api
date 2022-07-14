<?php

use App\Http\Controllers\Api\AuthUserController;
use App\Http\Controllers\SampahController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('sampah', SampahController::class);
Route::get('/verify/{verifyHash}', [AuthUserController::class, 'verify']);
