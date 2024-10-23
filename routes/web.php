<?php

use App\Http\Controllers\MockController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('mocks/provider-1-tasks',[MockController::class, 'provider1Tasks']);
Route::get('mocks/provider-2-tasks',[MockController::class, 'provider2Tasks']);

