<?php

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

// main route
Route::get('/', function () {
    return view('welcome');
})->name('/');

// emp route
Route::get('/employees/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees/create', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/list', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employees.index');

// by id
Route::get('/employees/edit/{id}', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('employees.edit');
Route::post('/employees/edit/{id}', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('employees.update');
Route::get('/employees/show/{id}', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/destroy/{id}', [\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employees.destroy');
