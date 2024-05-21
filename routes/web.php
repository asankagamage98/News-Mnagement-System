<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsManagementController;


//return pages
Route::get('/',[NewsManagementController::class,'index'])->name('home');



//news
Route::prefix('/news')->group(function(){
    //page navigation routes
    Route::get('/',[NewsManagementController::class, 'NewsPage'])->name('news');
    Route::get('/newsView/{id}', [NewsManagementController::class, 'NewsViewPage'])->name('news.view');
    Route::get('/editPage',[NewsManagementController::class, 'UpdatePage'])->name('news.editNews');

    //function routes
    Route::post('/createNews',[NewsManagementController::class, 'createNews'])->name('news.create');
    Route::get('/getnewsbyid',[NewsManagementController::class, 'getByID'])->name('news.getNewsByID');
    Route::put('/editNews/{id}',[NewsManagementController::class, 'updateNews'])->name('news.edit');
});
