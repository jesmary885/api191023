<?php

use App\Http\Controllers\GenerateController;
use App\Http\Controllers\userController;
use App\Http\Controllers\UserController as ControllersUserController;
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

Route::apiResource('users',userController::class)->except('store');

Route::post('generate',[GenerateController::class,'generate'])->name('users_generate');




