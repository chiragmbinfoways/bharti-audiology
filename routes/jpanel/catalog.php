<?php

use App\Http\Controllers\Jpanel\Catalog\CategoryController;
use App\Http\Controllers\Jpanel\Catalog\BrandController;
use App\Http\Controllers\Jpanel\Catalog\AttributeController;
use App\Http\Controllers\Jpanel\Catalog\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {

    // -------------------- Category ----------------------------------------------------------------------------------------------------
    Route::get('/catalog/category', [CategoryController::class,'index'])->name('list.category');
    Route::get('/catalog/category/add', [CategoryController::class,'create'])->name('create.category');
    Route::post('/catalog/category/add', [CategoryController::class,'store'])->name('store.category');
    Route::get('/catalog/category/edit/{id}', [CategoryController::class,'edit'])->name('edit.category');
    Route::put('/catalog/category/edit/{id}', [CategoryController::class,'update'])->name('update.category');
    Route::put('/catalog/category/edit/description/{id}', [CategoryController::class,'updateCategoryDescription'])->name('update.category.description');
    Route::put('/catalog/category/edit/meta/{id}', [CategoryController::class,'updateCategoryMeta'])->name('update.category.meta');
    Route::put('/catalog/category/edit/thumbnail/{id}', [CategoryController::class,'updateCategoryThumbnail'])->name('update.category.thumbnail');
    Route::put('/catalog/category/edit/icon/{id}', [CategoryController::class,'updateCategoryIcon'])->name('update.category.icon');
    Route::put('/catalog/category/edit/cover/{id}', [CategoryController::class,'updateCategoryCover'])->name('update.category.cover');
    Route::post('/catalog/category/status', [CategoryController::class,'statusUpdate'])->name('status.change.category');
    Route::post('/catalog/category/delete', [CategoryController::class,'destroy'])->name('category.delete');

    //--------------------- Brand -----------------------------------------------------------------------------------------------
    Route::get('/catalog/brands', [BrandController::class,'index'])->name('list.brands');
    Route::get('/catalog/brand/add', [BrandController::class,'create'])->name('create.brand');
    Route::post('/catalog/brand/add', [BrandController::class,'store'])->name('store.brand');
    Route::get('/catalog/brand/edit/{id}', [BrandController::class,'edit'])->name('edit.brand');
    Route::put('/catalog/brand/edit/{id}', [BrandController::class,'update'])->name('update.brand');
    Route::put('/catalog/brand/edit/description/{id}', [BrandController::class,'updateBrandDescription'])->name('update.brand.description');
    Route::put('/catalog/brand/edit/meta/{id}', [BrandController::class,'updateBrandMeta'])->name('update.brand.meta');
    Route::put('/catalog/brand/edit/icon/{id}', [BrandController::class,'updateBrandLogo'])->name('update.brand.logo');
    Route::put('/catalog/brand/edit/cover/{id}', [BrandController::class,'updateBrandCover'])->name('update.brand.cover');
    Route::post('/catalog/brand/status', [BrandController::class,'statusUpdate'])->name('status.change.brand');
    Route::post('/catalog/brand/delete', [BrandController::class,'destroy'])->name('brand.delete');

    //--------------------- Attribute -----------------------------------------------------------------------------------------------
    Route::get('/catalog/attribute', [AttributeController::class,'index'])->name('list.attributes');
    Route::get('/catalog/attribute/add', [AttributeController::class,'create'])->name('create.attribute');
    Route::post('/catalog/attribute/add', [AttributeController::class,'store'])->name('store.attribute');
    Route::get('/catalog/attribute/edit/{id}', [AttributeController::class,'edit'])->name('edit.attribute');
    Route::put('/catalog/attribute/edit/{id}', [AttributeController::class,'update'])->name('update.attribute');
    Route::post('/catalog/attribute/status', [AttributeController::class,'statusUpdate'])->name('status.change.attribute');
    Route::post('/catalog/attribute/delete', [AttributeController::class,'destroy'])->name('attribute.delete');
    Route::get('/catalog/attribute/value/{id}', [AttributeController::class,'value'])->name('value.attribute');
    Route::post('/catalog/attribute/value/{id}', [AttributeController::class,'valueAdd'])->name('store.value.attribute');
    Route::post('/catalog/attribute/value-delete', [AttributeController::class,'valueDelete'])->name('attribute.value.delete');

    //--------------------- Products -----------------------------------------------------------------------------------------------
    Route::get('/catalog/products', [ProductController::class,'index'])->name('list.products');
    Route::get('/catalog/product/add', [ProductController::class,'create'])->name('create.product');
    Route::post('/catalog/product/add', [ProductController::class,'store'])->name('store.product');
    Route::get('/catalog/product/subcategory/{id}', [ProductController::class,'subcategory'])->name('subcategory.product');
    Route::get('/catalog/product/attribute_value/{id}', [ProductController::class,'attribute_value'])->name('attribute_value.product');
    Route::post('/catalog/product/status', [ProductController::class,'statusUpdate'])->name('status.change.product');
    Route::get('/catalog/product/edit/{id}', [ProductController::class,'edit'])->name('edit.product');
    Route::post('/catalog/product/edit/{id}', [ProductController::class,'update'])->name('update.product');
    Route::post('/catalog/product/delete', [ProductController::class,'delete'])->name('product.delete');
    Route::get('/catalog/product/upload/{id}', [ProductController::class,'upload'])->name('upload.product');
    Route::post('/catalog/product/upload', [ProductController::class,'storeImage'])->name('upload.image.product');
    Route::get('/catalog/product/attribute/{id}', [ProductController::class,'attribute'])->name('attribute.product');
    Route::post('/catalog/product/attribute', [ProductController::class,'attribute_store'])->name('store.product.attribute');
    Route::get('/catalog/product/image/delete/{id}', [ProductController::class,'imageDelete'])->name('product.image.delete');
    Route::post('/catalog/product/attribute/delete', [ProductController::class,'deleteProductAttribute'])->name('product.attribute.delete');
    Route::post('/catalog/product/image/order', [ProductController::class,'imageOrder'])->name('order.image.product');


});
