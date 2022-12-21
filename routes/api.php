<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/Kral/305379/people',[\App\Http\Controllers\people_controller::class,'index']);
Route::get('/Kral/305379/people/{id}',[\App\Http\Controllers\people_controller::class,'show']);
Route::post('/Kral/305379/people',[\App\Http\Controllers\people_controller::class,'store']);
Route::put('/Kral/305379/people/{id}/{Nazwisko}',[\App\Http\Controllers\people_controller::class,'update']);
Route::delete('/Kral/305379/people/{id}',[\App\Http\Controllers\people_controller::class,'destroy']);
