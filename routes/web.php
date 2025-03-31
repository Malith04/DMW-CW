<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/',[DashboardController::class,'dashboard'] );
Route::get('/users',[UserController::class,'index']);
Route::get('/users/new',[UserController::class,'create']);
Route::get('/users/edit/{id}',[UserController::class,'edit']);
Route::get('/users/view/{id}',[UserController::class,'view']);
Route::post('/users/add',[UserController::class,'store']);
Route::post('/users/update/{id}',[UserController::class,'update']);
Route::get('/users/delete/{id}',[UserController::class,'delete']);


Route::get('/vehicles', [VehicleController::class, 'index']);
Route::get('/vehicles/new', [VehicleController::class, 'create']);
Route::get('/vehicles/edit/{id}', [VehicleController::class, 'edit']);
Route::get('/vehicles/view/{id}', [VehicleController::class, 'view']);
Route::post('/vehicles/add', [VehicleController::class, 'store']);
Route::post('/vehicles/update/{id}', [VehicleController::class, 'update']);
Route::get('/vehicles/delete/{id}', [VehicleController::class, 'delete']);
