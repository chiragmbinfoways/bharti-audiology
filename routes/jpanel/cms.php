<?php

use App\Http\Controllers\Jpanel\Cms\CmsController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {
    Route::get('/cms', [CmsController::class,'index'])->name('list.cms');
    Route::post('/cms/status', [CmsController::class,'status'])->name('status.change.cms');
    Route::post('/cms/delete', [CmsController::class,'delete'])->name('delete.cms');
    Route::get('/cms/create', [CmsController::class,'create'])->name('create.cms');
    Route::post('/cms/store', [CmsController::class,'store'])->name('store.cms');
    Route::get('/cms/edit/{id}', [CmsController::class,'edit'])->name('edit.cms');
    Route::post('/cms/edit/{id}', [CmsController::class,'update'])->name('update.cms');


});
