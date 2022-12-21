<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[homeController::class,'index'])->name('index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/jpanel', 'App\Http\Controllers\Jpanel\DashboardController@index')->name('home');
});

