<?php

use App\Models\Department;
use Illuminate\Support\Facades\Route;

use App\Livewire\Guest\Welcome\Index as WelcomeIndex;

use App\Livewire\Guest\Services\Index as ServiceIndex;
use App\Livewire\Guest\Services\Show as ServiceShow;

use App\Livewire\Guest\PressReales\Index as PressRealesIndex;
use App\Livewire\Guest\PressReales\Show as PressRealesShow;

use App\Livewire\Guest\Events\Index as EventsIndex;
use App\Livewire\Guest\Events\Show as EventsShow;

use App\Livewire\Guest\Departments\Index as DepartmentIndex;
use App\Livewire\Guest\Departments\Show as DepartmentShow;

Route::get('/', WelcomeIndex::class)->name('welcome');

Route::get('/services/type/{type:slug}', ServiceIndex::class)->name('services.index');
Route::get('/services/{service}', ServiceShow::class)->name('services.show');

Route::get('/press-reales', PressRealesIndex::class)->name('press-reales.index');
Route::get('/press-reales/{pressRelease}', PressRealesShow::class)->name('press-reales.show');

Route::get('/events', EventsIndex::class)->name('events.index');
Route::get('/events/{event}', EventsShow::class)->name('events.show');

Route::get('/departments', DepartmentIndex::class)->name('departments.index');
Route::get('/departments/{department}', DepartmentShow::class)->name('departments.show');




