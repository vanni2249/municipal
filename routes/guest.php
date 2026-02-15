<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Guest\Welcome\Index as WelcomeIndex;

use App\Livewire\Guest\Services\Index as ServiceIndex;
use App\Livewire\Guest\Services\Show as ServiceShow;

use App\Livewire\Guest\News\Index as NewsIndex;
use App\Livewire\Guest\News\Show as NewsShow;

use App\Livewire\Guest\Events\Index as EventsIndex;
use App\Livewire\Guest\Events\Show as EventsShow;

    Route::get('/', WelcomeIndex::class)->name('welcome');

    Route::get('/services/type/{type:slug}', ServiceIndex::class)->name('services.index');
    Route::get('/services/{service}', ServiceShow::class)->name('services.show');

    Route::get('/news', NewsIndex::class)->name('news.index');
    Route::get('/news/{news}', NewsShow::class)->name('news.show');

    Route::get('/events', EventsIndex::class)->name('events.index');
    Route::get('/events/{event}', EventsShow::class)->name('events.show');




   