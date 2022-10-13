<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
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
// Route::view('/admin', 'admin.admin')->name('admin')->middleware('auth'); rutas con autenticación
Route::view('/admin', 'admin.admin')->name('admin');
    //crud users
    Route::get('/admin/users', [UserController::class, 'index'])->name('users');
    //crud roles
    Route::get('/admin/rol', [RoleController::class, 'index'])->name('rol');
   
    //crud categories
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/admin/categories/create',[CategoryController::class, 'create'])->name('categories.create');
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::patch('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    
    // Route::resource('categories', [CategoryController::class]);
    
    //crud products
    Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/admin/products/create',[CategoryController::class, 'create'])->name('products.create');
    Route::post('/admin/products', [CategoryController::class, 'store'])->name('products.store');
    Route::get('/admin/products/{product}', [CategoryController::class, 'show'])->name('products.show');
    Route::get('/admin/products/{product}/edit', [CategoryController::class, 'edit'])->name('products.edit');
    Route::patch('/admin/products/{product}', [CategoryController::class, 'update'])->name('products.update');
    Route::delete('/admin/products/{product}', [CategoryController::class, 'destroy'])->name('products.destroy');


//login 
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
//register
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
//users()

Route::view('/', 'welcome');