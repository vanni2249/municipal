<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Accountants\Index as AccountantIndex;
use App\Livewire\Admin\Accountants\Create as AccountantCreate;
use App\Livewire\Admin\Accountants\Show as AccountantShow;
use App\Livewire\Admin\Accountants\Edit as AccountantEdit;

Route::prefix('/accountants')->name('accountants.')->group(function () {
    Route::get('/', AccountantIndex::class)->name('index');
    
    Route::get('/create', AccountantCreate::class)->name('create');

    Route::get('/{accountant}', AccountantShow::class)->name('show');

    Route::get('/{accountant}/edit', AccountantEdit::class)->name('edit');
});