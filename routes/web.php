<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DepartmentEmployeeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('employees', EmployeeController::class);

Route::resource('salaries', SalaryController::class);

Route::resource('departments', DepartmentController::class);

Route::resource('departmentsemployees', DepartmentEmployeeController::class);
Route::get('/departmentsemployees', [DepartmentEmployeeController::class, 'index'])->name('department_employee.index');
Route::get('/departmentsemployees/create', [DepartmentEmployeeController::class, 'create'])->name('department_employee.create');
Route::post('/departmentsemployees', [DepartmentEmployeeController::class, 'store'])->name('department_employee.store');
Route::get('/departmentsemployees/{department_employee}/edit', [DepartmentEmployeeController::class, 'edit'])->name('department_employee.edit');
Route::put('/departmentsemployees/{department_employee}', [DepartmentEmployeeController::class, 'update'])->name('department_employee.update');
Route::delete('/departmentsemployees/{department_employee}', [DepartmentEmployeeController::class, 'destroy'])->name('department_employee.destroy');


Route::get('/employee/search', [EmployeeController::class, 'search'])->name('employee.search');