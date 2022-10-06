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
    Route::get('/admin/products', [ProductController::class, 'index'])->name('products');


//login 
Route::get('/login', function(){
    return 'Login page';
})->name('login');
//users()

Route::view('/', 'welcome');