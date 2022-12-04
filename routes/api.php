<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthApiController;
use App\Http\Controllers\API\PostController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' => 'auth:sanctum'], function (){
//     Route::get('/get', 'App\Http\Controllers\GetController@index');
// });

//ApiGet
Route::get('/contacts',[PostController::class,'index']);
Route::delete('/contact/{contact}/delete',[PostController::class,'del']);
Route::post('/store',[PostController::class,'store']);
Route::put('/contact/{contact}/edit',[PostController::class,'edit']);



Route::post('user/register', [AuthApiController::class, 'userRegister']);
Route::post('user/login', [AuthApiController::class, 'userLogin']);
Route::post('/logout', [AuthApiController::class, 'logout']);

Route::middleware(['auth:api', 'admin'])->group(function () {
    Route::get('get-user', [AuthApiController::class, 'userDetail']);
});