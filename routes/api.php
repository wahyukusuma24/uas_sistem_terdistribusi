<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PasswordResetRequestController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\API\ImageUploadController;
use App\Http\Controllers\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function(){
    Route::post('login','login');
    Route::post('register','register');
});

Route::controller(PasswordResetRequestController::class)->group(function(){
    Route::post('logout','logout');
    Route::post('sendPasswordResetLink','sendEmail');
});

Route::apiResource('books', BookController::class);
Route::apiResource('visitors', VisitorController::class);

Route::post('image/upload',[ImageUploadController::class, 'ImageUpload']);

