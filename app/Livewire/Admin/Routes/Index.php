<?php

namespace App\Livewire\Admin\Routes;

use App\Models\Route;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public function mount()
    {
        sleep(1);
    }

    public function placeholder()
    {
        return view('placeholders.views.partials.header-table-skeleton');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.routes.index',[
            'routes' => Route::with(['routeType'])->paginate(20),
        ]);
    }
}
