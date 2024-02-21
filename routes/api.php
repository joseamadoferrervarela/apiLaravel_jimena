<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MibaseController;
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



Route::get('/mibase', [MibaseController::class,'index']);
Route::get('/mibase/{id}', [MibaseController::class,'show']);
Route::post('/mibase', [MibaseController::class,'create']);
Route::post('/mibase/edit/{id}', [MibaseController::class,'edit']);
Route::delete('/mibase/{id}', [MibaseController::class,'destroy']);