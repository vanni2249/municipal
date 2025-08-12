<?php

use App\Models\Register;
use App\Livewire\Admin\Registers\Index as RegisterIndex;
use App\Livewire\Admin\Registers\Create as RegisterCreate;
use App\Livewire\Admin\Registers\Show as RegisterShow;
use App\Livewire\Admin\Registers\Edit as RegisterEdit;
use Illuminate\Support\Facades\Route;

Route::prefix('/registers')->name('registers.')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.registers.index');
    // })->name('index');
    Route::get('/', RegisterIndex::class)->name('index');
    
    // Route::get('/create', function () {
    //     return view('admin.registers.create');
    // })->name('create');
    Route::get('/create', RegisterCreate::class)->name('create');

    // Route::get('/{register}', function ($register) {
    //     return view('admin.registers.show', compact('register'));
    // })->name('show');
    Route::get('/{register}', RegisterShow::class)->name('show');

    Route::get('/{register}/edit', RegisterEdit::class)->name('edit');
});