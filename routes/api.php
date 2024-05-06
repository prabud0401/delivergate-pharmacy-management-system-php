<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;

use Illuminate\Support\Facades\Route;

// Routes for items
Route::post('/items', [ItemController::class, 'store']);
Route::put('/items/{id}', [ItemController::class, 'update']);
Route::delete('/items/{id}', [ItemController::class, 'destroy']);

// Routes for customers
Route::post('/customers', [CustomerController::class, 'store']);
Route::put('/customers/{id}', [CustomerController::class, 'update']);
Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);
