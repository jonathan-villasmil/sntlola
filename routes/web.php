<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
    // Route::resource('/admin/users', [UserController::class], ['except'=>['create', 'store']])->names('users');

    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/users/create',[UserController::class, 'create'])->name('users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('/admin/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    
    //crud roles

    Route::get('/test', function () 
    {
        $user = User::find(1);

        //$user->roles()->sync([3]);
        Gate::authorize('haveaccess', 'roles.index' );
        return $user;
        //return $user->havePermission('roles.index');
    });

    //Route::resource('/admin/roles',[RoleController::class])->names('roles');
    Route::get('/admin/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/admin/roles/create',[RoleController::class, 'create'])->name('roles.create');
    Route::post('/admin/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/admin/roles/{role}', [RoleController::class, 'show'])->name('roles.show');
    Route::get('/admin/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::patch('/admin/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/admin/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');

   
    //crud categories
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/admin/categories/create',[CategoryController::class, 'create'])->name('categories.create');
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::patch('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    // Route::resource('categories', [CategoryController::class])->names('categories');
    
    //crud products
    Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/admin/products/create',[ProductController::class, 'create'])->name('products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/admin/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::patch('/admin/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    //search products
    Route::post('/admin/products/search', [ProductController::class, 'search'])->name('products.search');



    Route::get('/admin/stocks', [ProductController::class, 'indexStocks'])->name('products.stocks');
    Route::patch('/admin/stocks/stocksUpdate', [ProductController::class, 'updatedStock'])->name('products.stocksUpdate');
    Route::get('admin/stocks/quantitiesQuestions', [ProductController::class, 'questionsProductQuantities'])->name('products.questionsQuantities');

//login 
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

//register
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

//role(1(cocinero-jefe de cocina))

//users()
//vistas para los usuarios logeados
Route::view('/', 'welcome');