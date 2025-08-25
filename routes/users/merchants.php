<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Merchants\Index as MerchantIndex;
use App\Livewire\Users\Merchants\Create as MerchantCreate;
use App\Livewire\Users\Merchants\Show as MerchantShow;
use App\Livewire\Users\Merchants\Edit as MerchantEdit;

use App\Livewire\Users\Merchants\Businesses\Create as BusinessCreate;
use App\Livewire\Users\Merchants\Businesses\Show as BusinessShow;
use App\Livewire\Users\Merchants\Businesses\Edit as BusinessEdit;

use App\Livewire\Users\Merchants\Businesses\Actions\Index as ActionIndex;
use App\Livewire\Users\Merchants\Businesses\Actions\Create as ActionCreate;
use App\Livewire\Users\Merchants\Businesses\Actions\Show as ActionShow;
use App\Livewire\Users\Merchants\Businesses\Actions\Edit as ActionEdit;

Route::prefix('/merchants')->name('users.merchants.')->group(function () {

    Route::get('/', MerchantIndex::class)->name('index');

    Route::get('/create', MerchantCreate::class)->name('create');

    Route::get('/{merchant}', MerchantShow::class)->name('show');

    Route::get('/{merchant}/edit', MerchantEdit::class)->name('edit');

    Route::prefix('{merchant}/businesses')->name('businesses.')->group(function () {
        Route::get('/create', BusinessCreate::class)->name('create');

        Route::get('/{business}', BusinessShow::class)->name('show');

        Route::get('/{business}/edit', BusinessEdit::class)->name('edit');

        Route::prefix('{business}/actions')->name('actions.')->group(function () {
            Route::get('/', ActionIndex::class)->name('index');

            Route::get('/create/{service}', ActionCreate::class)->name('create');

            Route::get('/{action}', ActionShow::class)->name('show');

            Route::get('/{action}/edit', ActionEdit::class)->name('edit');
        });
    });
});
