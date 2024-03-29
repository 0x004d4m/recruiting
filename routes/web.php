<?php

use App\Http\Controllers\Website\ApplicationController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::post('/', [HomeController::class,'store']);
Route::get('/apply', [ApplicationController::class,'index']);
Route::post('/apply', [ApplicationController::class,'store']);
