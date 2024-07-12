<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/products", [ProductController::class, 'index'])->name('products.index');
Route::get("/products/create", [ProductController::class, 'create'])->name('products.create');
Route::post("/products", [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{products}/edit', [ProductController::class, 'edit'])->name('products.edit'); 
Route::put('/products/{products}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{products}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
