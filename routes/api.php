<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\{LoginController,RegisterController};








Route::middleware(['throttle:login'])->group(function (){
    Route::post('login',LoginController::class);
});


Route::post('register',RegisterController::class);


Route::middleware('auth:sanctum')->group(function (){



});
