<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CodeController;
use App\Http\Controllers\API\ReaderController;
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


