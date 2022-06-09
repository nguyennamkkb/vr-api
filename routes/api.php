<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CodeController;
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

//codeController
Route::get('codes',[ CodeController::class, 'index']);// lay thong toan bo thong tin
Route::post('codes',[ CodeController::class, 'store']); // them moi thong tin
Route::get('codes/{id}',[ CodeController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('codes/{id}',[ CodeController::class, 'update']); // sua thong tin
Route::delete('codes/{id}',[ CodeController::class, 'destroy']);// xoa thong tin
Route::get('codes',[ CodeController::class, 'index']);// lay thong toan bo thong tin
Route::post('codes',[ CodeController::class, 'store']); // them moi thong tin
Route::get('codes/{id}',[ CodeController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('codes/{id}',[ CodeController::class, 'update']); // sua thong tin
Route::delete('codes/{id}',[ CodeController::class, 'destroy']);// xoa thong tin


