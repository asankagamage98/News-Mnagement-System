<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsManagementController;



Route::get('/',[NewsManagementController::class,'index'])->name('home');
