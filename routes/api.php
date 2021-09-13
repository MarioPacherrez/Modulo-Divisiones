<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DivisionController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::get('divisions', [DivisionController::class,'index']);
Route::post('divisions', [DivisionController::class,'store']);
Route::get('divisions/{division}', [DivisionController::class,'show']);
Route::put('divisions/{division}', [DivisionController::class,'update']);
Route::delete('divisions/{division}', [DivisionController::class,'destroy']);*/

Route::apiResource('divisions', DivisionController::class);