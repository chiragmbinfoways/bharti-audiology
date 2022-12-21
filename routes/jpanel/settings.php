<?php

use App\Http\Controllers\Jpanel\settings\SettingsController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {
    Route::get('/settings', [SettingsController::class,'index'])->name('list.settings');
    Route::post('/settings/status', [SettingsController::class,'status'])->name('status.change.settings');
    Route::post('/settings/delete', [SettingsController::class,'delete'])->name('delete.settings');
    Route::get('/settings/create', [SettingsController::class,'create'])->name('create.settings');
    Route::post('/settings/store', [SettingsController::class,'store'])->name('store.settings');
    Route::get('/settings/edit/{id}', [SettingsController::class,'edit'])->name('edit.settings');
    Route::post('/settings/edit/{id}', [SettingsController::class,'update'])->name('update.settings');


});
