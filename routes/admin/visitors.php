<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Visitors\Index as VisitorIndex;
use App\Livewire\Admin\Visitors\Create as VisitorCreate;
use App\Livewire\Admin\Visitors\Show as VisitorShow;
use App\Livewire\Admin\Visitors\Edit as VisitorEdit;

Route::prefix('/visitors')->name('visitors.')->group(function () {
    Route::get('/', VisitorIndex::class)->name('index');
    
    Route::get('/create', VisitorCreate::class)->name('create');

    Route::get('/{visitor}', VisitorShow::class)->name('show');

    Route::get('/{visitor}/edit', VisitorEdit::class)->name('edit');
});