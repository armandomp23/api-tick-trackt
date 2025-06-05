<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::post('/login', [AuthController::class, 'login']);

route::middleware('auth:sanctum')->group(function () {
    route::get('/me',[AuthController::class, 'me']);
    route::post('/logout', [AuthController::class, 'logout']);
});