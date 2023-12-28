<?php

use App\Http\Controllers\Api\BiodataController;
use App\Models\Biodata;
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

Route::get('riize',[BiodataController::class, 'index']);
Route::get('riize/{id}',[BiodataController::class, 'show']);
Route::post('riize/{id}',[BiodataController::class, 'store']);
