<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EmployeeController;

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
    Route::get('add-employee',[EmployeeController::class,'addEmployee'])->name('add.employee');
    Route::post('add-employee',[EmployeeController::class,'saveEmployee'])->name('add.employee');
    Route::get('manage-employee',[EmployeeController::class,'manageEmployee'])->name('manage.employee');
    Route::post('delete-employee/{id}',[EmployeeController::class,'deleteEmployee'])->name('delete.employee');

    /* Agent */
    Route::get('add-agent',[AgentController::class,'addAgent'])->name('add.agent');
    Route::post('add-agent',[AgentController::class,'saveAgent'])->name('add.agent');
    Route::get('manage-agent',[AgentController::class,'manageAgent'])->name('manage.agent');
    Route::post('delete-agent/{id}',[AgentController::class,'deleteAgent'])->name('delete.agent');

    /* Customer */
    Route::get('add-customer',[CustomerController::class,'addCustomer'])->name('add.customer');
    Route::post('add-customer',[CustomerController::class,'saveCustomer'])->name('add.customer');
    Route::get('manage-customer',[CustomerController::class,'manageCustomer'])->name('manage.customer');
    Route::post('delete-customer/{id}',[CustomerController::class,'deleteCustomer'])->name('delete.customer');

    /* Setting */
    /* Batch */
    Route::post('add-batch',[BatchController::class,'saveBatch'])->name('add.batch');
    Route::get('manage-batch',[BatchController::class,'manageBatch'])->name('manage.batch');
    Route::post('delete-batch/{id}',[BatchController::class,'deleteBatch'])->name('delete.batch');


});
