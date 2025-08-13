<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Employees\Index as EmployeeIndex;
use App\Livewire\Admin\Employees\Create as EmployeeCreate;
use App\Livewire\Admin\Employees\Show as EmployeeShow;
use App\Livewire\Admin\Employees\Edit as EmployeeEdit;

Route::prefix('/employees')->name('employees.')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.employees.index');
    // })->name('index');

    Route::get('/', EmployeeIndex::class)->name('index');
    Route::get('/create', EmployeeCreate::class)->name('create');
    Route::get('/{employee}', EmployeeShow::class)->name('show');
    Route::get('/{employee}/edit', EmployeeEdit::class)->name('edit');

    // Route::get('/create', function () {
    //     return view('admin.employees.create');
    // })->name('create');
    // Route::get('/{employee}', function (Admin $employee) {
    //     return view('admin.employees.show', ['employee' => $employee]);
    // })->name('show');
    // Route::get('/{employee}/edit', function (Admin $employee) {
    //     return view('admin.employees.edit', ['employee' => $employee]);
    // })->name('edit');
});