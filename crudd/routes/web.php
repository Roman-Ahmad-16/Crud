<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employees/add', [EmployeeController::class, 'add'])->name('employee.add');
Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employees/edit{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employees/update{id}', [EmployeeController::class, 'update'])->name('employee.update');