<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware(['auth:sanctum'])->get('/user', function (Request
$request) {
return $request->user();
});
Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
