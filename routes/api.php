<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CodeController;
use App\Http\Controllers\API\ReaderController;
use App\Http\Controllers\API\UnitController;
use App\Http\Controllers\API\BiometricController;
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

Route::get('readers',[ ReaderController::class, 'index']);// lay thong toan bo thong tin
Route::post('readers',[ ReaderController::class, 'store']); // them moi thong tin
Route::get('readers/{id}',[ ReaderController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('readers/{id}',[ ReaderController::class, 'update']); // sua thong tin
Route::delete('readers/{id}',[ ReaderController::class, 'destroy']);// xoa thong tin


Route::get('units',[ UnitController::class, 'index']);// lay thong toan bo thong tin
Route::post('units',[ UnitController::class, 'store']); // them moi thong tin
Route::get('units/{id}',[ UnitController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('units/{id}',[ UnitController::class, 'update']); // sua thong tin
Route::delete('units/{id}',[ UnitController::class, 'destroy']);// xoa thong tin

Route::get('biometrics',[ BiometricController::class, 'index']);// lay thong toan bo thong tin
Route::post('biometrics',[ BiometricController::class, 'store']); // them moi thong tin
Route::get('biometrics/{id}',[ BiometricController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('biometrics/{id}',[ BiometricController::class, 'update']); // sua thong tin
Route::delete('biometrics/{id}',[ BiometricController::class, 'destroy']);// xoa thong tin


