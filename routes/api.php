<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\TypeController;
use App\Http\Resources\MaterialResource;
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

Route::resource('materials', MaterialController::class);
Route::resource('types', TypeController::class);

Route::delete('types/{type:type_id}', [TypeController::class, 'destroy']);