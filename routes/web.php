<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/json',[DemoController::class,'jsonResponse']);
Route::post('/details',[DemoController::class,'DataAction']);
Route::get('/file',[DemoController::class,'fileHandle']);
Route::post('/submit',[DemoController::class,'Submit']);
