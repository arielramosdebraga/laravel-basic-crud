<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;

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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product');

Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.products');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/products', [AdminProductController::class, 'store'])->name('admin.product.store');

Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('admin.product.update');

Route::get('/admin/products/{product}/delete', [AdminProductController::class, 'destroy'])->name('admin.product.destroy');
Route::get('/admin/products/{product}/delete-image', [AdminProductController::class, 'destroyImage'])->name('admin.product.destroyImage');

Route::get('/user', [UserController::class, 'index'])->name('user');