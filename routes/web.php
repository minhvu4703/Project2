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
    Route::get('/login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('customers.login');
    Route::post('/loginProcess', [\App\Http\Controllers\CustomerController::class, 'loginProcess'])->name('customers.loginProcess');
    Route::get('/register', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customers.register');
    Route::post('/register', [\App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');
    Route::get('/logout', [\App\Http\Controllers\CustomerController::class, 'logout'])->name('customers.logout');
});

Route::prefix('/dashboard')->group(function (){
    Route::get('/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('dashboard.login');
    Route::post('/loginProcess', [\App\Http\Controllers\AdminController::class, 'loginProcess'])->name('dashboard.loginProcess');
});

//
Route::middleware('loginCustomer')->prefix('/customers')->group(function (){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
    Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'order'])->name('customers.orders');
    Route::post('/orders/store', [\App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');
    Route::post('/details/store', [\App\Http\Controllers\OrderController::class, 'store_details'])->name('details.store');
    Route::get('/orders/getFields/{id}', [\App\Http\Controllers\OrderController::class, 'getFields']);
//    Route::get('/orders/getDates/', [\App\Http\Controllers\OrderController::class, 'getDates']);
    Route::get('/orders/getTimes2Day/', [\App\Http\Controllers\OrderController::class, 'getTimes2Day']);
    Route::get('/orders/getTimesNextDay/', [\App\Http\Controllers\OrderController::class, 'getTimesNextDay']);
    Route::get('/history', [\App\Http\Controllers\CustomerController::class, 'history'])->name('customers.history');
    Route::delete('/customers/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.destroy');
});

//
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
    Route::get('/field_types', [\App\Http\Controllers\FieldTypeController::class, 'index'])->name('field_types.index');
    Route::get('/times', [\App\Http\Controllers\TimeController::class, 'index'])->name('times.index');
    Route::put('/orders/{order}/accepted', [\App\Http\Controllers\OrderController::class, 'acceptOrder'])->name('orders.accepted');
    Route::put('/orders/{order}/denied', [\App\Http\Controllers\OrderController::class, 'deniedOrder'])->name('orders.denied');
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [\App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [\App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
    Route::delete('/admin/{id}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('dashboard.logout');
});
