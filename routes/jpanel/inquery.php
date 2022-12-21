<?php

use App\Http\Controllers\Jpanel\Inquery\InqueryController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/contactList', [InqueryController::class,'contactlist'])->name('contactlist');
    Route::post('/inquery/delete', [InqueryController::class,'delete'])->name('delete.inquery');
    Route::get('/supportList', [InqueryController::class,'support'])->name('support.link');
    Route::get('/ProductInquery', [InqueryController::class,'ProductInquery'])->name('ProductInquery.link');
   
});
