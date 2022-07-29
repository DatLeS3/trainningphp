<?php

use App\Http\Controllers\TrainningController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/trainning', [TrainningController::class, 'store']); //tao 
Route::get('/trainning', [TrainningController::class, 'index']); // hien thi
Route::get('/trainning/{id}', [TrainningController::class, 'show']); //tim thay
Route::patch('/trainning/{id}', [TrainningController::class, 'update']); //cap nhat
Route::delete('/trainning/{id}', [TrainningController::class, 'delete']); //xoa 
