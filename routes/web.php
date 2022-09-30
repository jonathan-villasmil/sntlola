<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//admin
Route::view('/admin', 'admin.admin')->name('admin');
    //crud users
    Route::get('/admin/users', [UserController::class, 'index'])->name('users');
    //crud roles
    Route::get('/admin/rol', [RoleController::class, 'index'])->name('rol');
    //crud categories
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories');
    //crud products
    Route::get('/admin/products', [ProductController::class, 'index'])->name('products');

//users()

Route::view('/', 'welcome');