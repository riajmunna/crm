<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
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

Route::get('/',[FrontEndController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('dashboard',[AdminController::class,'adminDashboard'])->name('dashboard');

    /* Employee */
    Route::get('add-employee',[AdminController::class,'addEmployee'])->name('add.employee');
    Route::post('add-employee',[AdminController::class,'saveEmployee'])->name('add.employee');
    Route::get('manage-employee',[AdminController::class,'manageEmployee'])->name('manage.employee');
    Route::post('delete-employee/{id}',[AdminController::class,'deleteEmployee'])->name('delete.employee');

    /* Customer */
    Route::get('add-customer',[CustomerController::class,'addCustomer'])->name('add.customer');
    Route::post('add-customer',[CustomerController::class,'saveCustomer'])->name('add.customer');
    Route::get('manage-customer',[CustomerController::class,'manageCustomer'])->name('manage.customer');
    Route::post('delete-customer/{id}',[CustomerController::class,'deleteCustomer'])->name('delete.customer');

});
