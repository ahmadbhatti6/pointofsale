<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/ahmad', function () {
    return view('table');
});

Route::get('/datatable', function () {
    return view('datatable');
});

Route::get('/jsGrid', function () {
    return view('jsGrid');
});

Route::get('user/create', [UserController::class, 'create'])->name('users.create');
Route::post('user/create', [UserController::class, 'store'])->name('users.store');
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::post('user/edit/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('user/delete/{user}', [UserController::class, 'index'])->name('users.destroy');
Route::delete('user/delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');



Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');




 








