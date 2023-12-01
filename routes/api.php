<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\vehicleApiController;
use App\Http\Controllers\api\wizUsersApiController;
use App\Http\Controllers\api\realEstateApiController;
use App\Http\Controllers\api\electronicsApiController;
use App\Http\Controllers\api\allStampDocsApiController;

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
//////////////////////////////// API routes start /////////////////////////////////////

/// => get Api 
// Route::get('/getvehiclesdata', [vehicleApiController::class , 'getVehicleDataF']);
// Route::get('/getelectronicsdata', [electronicsApiController::class , 'getElectronicsDataF']);
// Route::get('/getrealestatedata', [realEstateApiController::class , 'getRealEstateDataF']);
Route::get('/getdocs', [allStampDocsApiController::class , 'getDocF']);
Route::get('/users', [wizUsersApiController::class , 'getWizUsersApiF']);
// Route::get('/account', [wizUsersApiController::class , 'getaccountdetails']);

// => post Api
Route::post('/addDocs', [allStampDocsApiController::class , 'AddDocF']);
Route::post('/login', [wizUsersApiController::class , 'loginWizUsersApiF']);
Route::post('/signup', [wizUsersApiController::class , 'SignUpWizUsersApiF']);
Route::post('/reset', [wizUsersApiController::class , 'ResetPasswordF']);
// Route::post('/addelectronics', [electronicsApiController::class , 'addElectronicsF']);




