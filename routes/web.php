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

Route::prefix('/customers')->group(function () {
    Route::get('/login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('Customer.login');
    Route::post('/loginProcess', [\App\Http\Controllers\CustomerController::class, 'loginProcess'])->name('Customer.loginProcess');
    Route::get('/register', [\App\Http\Controllers\CustomerController::class, 'create'])->name('Customer.register');
    Route::post('/register', [\App\Http\Controllers\CustomerController::class, 'store'])->name('Customer.store');
});

Route::prefix('/dashboard')->group(function (){
    Route::get('/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('dashboard.login');
    Route::post('/loginProcess', [\App\Http\Controllers\AdminController::class, 'loginProcess'])->name('dashboard.loginProcess');
});

Route::middleware('loginCustomer')->prefix('/customers')->group(function (){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('Customer.index');
    Route::get('/orders', [\App\Http\Controllers\CustomerController::class, 'order'])->name('Customer.orders');
    Route::get('/history', [\App\Http\Controllers\CustomerController::class, 'history'])->name('Customer.history');
    Route::delete('/customers/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('Customer.destroy');
});

Route::middleware('loginAdmin')->prefix('/dashboard')->group(function (){
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard.index');
    Route::get('/fields',[\App\Http\Controllers\FieldController::class, 'index'])->name('Fields.index');
    Route::get('/fields/create', [\App\Http\Controllers\FieldController::class, 'create'])->name('Fields.create');
    Route::post('/fields/store', [\App\Http\Controllers\FieldController::class, 'store'])->name('Fields.store');
    Route::get('/customers', [\App\Http\Controllers\AdminController::class, 'customers'])->name('dashboard.customers');
    Route::delete('/fields/{id}', [\App\Http\Controllers\FieldController::class, 'destroy'])->name('Fields.destroy');
    Route::get('/fields/{field}/edit', [\App\Http\Controllers\FieldController::class, 'edit'])->name('Fields.edit');
    Route::put('/fields/{field}/edit', [\App\Http\Controllers\FieldController::class, 'update'])->name('Fields.update');
    Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('dashboard.orders');
    Route::put('/order/{order}/update', [\App\Http\Controllers\OrderDetailController::class, 'update'])->name('orders.update');
    Route::get('/field_types', [\App\Http\Controllers\FieldTypeController::class, 'index'])->name('field_types.index');
    Route::get('/times', [\App\Http\Controllers\TimeController::class, 'index'])->name('times.index');
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('Admin.index');
    Route::get('/admin/create', [\App\Http\Controllers\AdminController::class, 'create'])->name('Admin.create');
    Route::post('/admin/store', [\App\Http\Controllers\AdminController::class, 'store'])->name('Admin.store');
    Route::delete('/admin/{id}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('Admin.destroy');
    Route::get('/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('dashboard.logout');

});
