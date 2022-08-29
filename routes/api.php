<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CodeController;
use App\Http\Controllers\API\ReaderController;
use App\Http\Controllers\API\UnitController;
use App\Http\Controllers\API\BiometricController;
use App\Http\Controllers\API\TypeBiometricController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserBiometricController;
use App\Http\Controllers\Api\PassedTheGateController;
use App\Http\Controllers\Api\ReaderUserController;
use App\Http\Controllers\API\FpTemplateController;
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


Route::get('typebiometrics',[ TypeBiometricController::class, 'index']);// lay thong toan bo thong tin
Route::post('typebiometrics',[ TypeBiometricController::class, 'store']); // them moi thong tin
Route::get('typebiometrics/{id}',[ TypeBiometricController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('typebiometrics/{id}',[ TypeBiometricController::class, 'update']); // sua thong tin
Route::delete('typebiometrics/{id}',[ TypeBiometricController::class, 'destroy']);// xoa thong tin

Route::get('users',[ UserController::class, 'index']);// lay thong toan bo thong tin
Route::post('users',[ UserController::class, 'store']); // them moi thong tin
Route::get('users/{id}',[ UserController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('users/{id}',[ UserController::class, 'update']); // sua thong tin
Route::delete('users/{id}',[ UserController::class, 'destroy']);// xoa thong tin

	
Route::get('userbiometrics',[ UserBiometricController::class, 'index']);// lay thong toan bo thong tin
Route::post('userbiometrics',[ UserBiometricController::class, 'store']); // them moi thong tin
Route::get('userbiometrics/{id}',[ UserBiometricController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('userbiometrics/{id}',[ UserBiometricController::class, 'update']); // sua thong tin
Route::delete('userbiometrics/{id}',[ UserBiometricController::class, 'destroy']);// xoa thong tin

Route::get('passedthegate',[ PassedTheGateController::class, 'index']);// lay thong toan bo thong tin
Route::post('passedthegate',[ PassedTheGateController::class, 'store']); // them moi thong tin
Route::get('passedthegate/{id}',[ PassedTheGateController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('passedthegate/{id}',[ PassedTheGateController::class, 'update']); // sua thong tin
Route::delete('passedthegate/{id}',[ PassedTheGateController::class, 'destroy']);// xoa thong tin
Route::get('seeTimeSheet',[ PassedTheGateController::class, 'seeTimeSheet']);// lay thong toan bo thong tin
Route::post('updatepassedthegate',[ PassedTheGateController::class, 'updatepassedthegate']);// lay thong toan bo thong tin




Route::get('readerusers',[ ReaderUserController::class, 'index']);// lay thong toan bo thong tin
Route::post('readerusers',[ ReaderUserController::class, 'store']); // them moi thong tin
Route::get('readerusers/{id}',[ ReaderUserController::class, 'show']);// lay thong tin cuar 1 ma
Route::put('readerusers/{id}',[ ReaderUserController::class, 'update']); // sua thong tin
Route::delete('readerusers/{id}',[ ReaderUserController::class, 'destroy']);// xoa thong tin

Route::get('getAccessDoor',[ ReaderUserController::class, 'getAccessDoor']);// truy van mo cua
Route::get('getAccessDoorByCard',[ ReaderUserController::class, 'getAccessDoorByCard']);// truy van mo cua
Route::post('addNewUserBioReader',[ ReaderUserController::class, 'addNewUserBioReader']);// truy van mo cua

//backup Fp template
// Route::get('fptemplate',[ FpTemplateController::class, 'index']);// lay thong toan bo thong tin
Route::get('fptemplate',[ FpTemplateController::class, 'store']);// Theem template
Route::get('fptemplategetIdReaderbyid7462/{id}',[ FpTemplateController::class, 'getIdReaderbyid7462']);// Theem template
Route::post('getBackupFPTemplate',[ FpTemplateController::class, 'getBackupFPTemplate']);// Theem template
