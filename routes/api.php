<?php

use App\Http\Controllers\NewsManagementController;
use Illuminate\Support\Facades\Route;


Route::post('/createnews',[NewsManagementController::class,'createNews']);
Route::get('/getall',[NewsManagementController::class,'getAllNews']);
Route::put('/update',[NewsManagementController::class,'uasortNews']);
Route::delete('/delete/{id}',[NewsManagementController::class,'deleteNews']);
Route::get('/getbyid',[NewsManagementController::class,'getByid']);
