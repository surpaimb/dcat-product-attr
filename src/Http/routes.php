<?php

use Dcat\Admin\Extension\DcatProductAttr\Http\Controllers;
use Illuminate\Support\Facades\Route;

// 属性
Route::resource('product-attribute', Controllers\ProductAttributeController::class)->except('show');
// 图片上传
Route::post('product-attr-image-upload', [Controllers\UploadController::class, 'store']);
Route::post('product-attr-image-remove', [Controllers\UploadController::class, 'delete']);
