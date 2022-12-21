<?php

use App\Http\Controllers\frontend\homeController;
use Illuminate\Support\Facades\Route;


Route::get('faq',[homeController::class,'faq'])->name('faq');
Route::get('/contact',[homeController::class,'contactUs'])->name('contact');
Route::get('/hearingAids',[homeController::class,'hearingAids'])->name('hearingAids');
Route::get('/support',[homeController::class,'support'])->name('support');
Route::get('/hearingLoss',[homeController::class,'hearingLoss'])->name('hearingLoss');
Route::get('/products/{id}/{brand_id?}',[homeController::class,'products'])->name('products');
Route::post('/support',[homeController::class,'supportStore'])->name('store.support');
Route::post('/inquiry',[homeController::class,'store'])->name('store.inquiry');
Route::get('/category/products/{id}',[homeController::class,'categoryProducts'])->name('categoryProducts');
Route::get('/category/sub-category/{id}',[homeController::class,'subCategory'])->name('subCategory');
Route::get('/category/products/details/{id}',[homeController::class,'productDetails'])->name('product.details');
Route::post('/Productinquiry',[homeController::class,'storeProductInquery'])->name('store.productinquiry');
Route::get('/hearingLossDetails',[homeController::class,'moreDeatils'])->name('moreDeatils');
Route::get('/search',[homeController::class,'search'])->name('search');
Route::get('/sorting',[homeController::class,'sorting'])->name('sorting');


// bharti 