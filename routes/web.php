<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::prefix('/customer')->group(function () {
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('Customer.index');
    Route::get('/orders', [\App\Http\Controllers\CustomerController::class, 'order'])->name('Customer.orders');
    Route::get('/contact', [\App\Http\Controllers\CustomerController::class, 'contact'])->name('Customer.contact');
});

Route::prefix('/admin')->group(function (){
    Route::get('/',[\App\Http\Controllers\AdminController::class, 'index'])->name('Admin.index');
    Route::get('/fields',[\App\Http\Controllers\FieldController::class, 'index'])->name('fields.index');
    Route::get('/fields/create', [\App\Http\Controllers\FieldController::class, 'create'])->name('fields.create');
    Route::post('/fields/store', [\App\Http\Controllers\FieldController::class, 'store'])->name('fields.store');
    Route::get('/customers', [\App\Http\Controllers\AdminController::class, 'customers'])->name('Admin.customers');
    Route::delete('/fields/{id}', [\App\Http\Controllers\FieldController::class, 'destroy'])->name('fields.destroy');
    Route::get('/fields/{field}/edit', [\App\Http\Controllers\FieldController::class, 'edit'])->name('fields.edit');
    Route::put('/fields/{field}/edit', [\App\Http\Controllers\FieldController::class, 'update'])->name('fields.update');
    Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('Admin.orders');

});
