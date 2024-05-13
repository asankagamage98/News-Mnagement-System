<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsManagementController;


//return pages
Route::get('/',[NewsManagementController::class,'index'])->name('home');



//news
Route::prefix('/news')->group(function(){
    Route::get('/',[NewsManagementController::class, 'NewsPage'])->name('news');
    Route::post('/createNews',[NewsManagementController::class, 'createNews'])->name('news.create');
});
