<?php

use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/hello', function () {
    return "Hello World!";
});

Route::get('/json',[DemoController::class,'jsonResponse']);
Route::post('/details',[DemoController::class,'DataAction']);
Route::get('/file',[DemoController::class,'fileHandle']);
Route::post('/submit',[DemoController::class,'Submit']);
