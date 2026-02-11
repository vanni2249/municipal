<?php

namespace App\Livewire\Admin\Applications;

use App\Models\Application;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public function mount()
    {
    }

    public function placeholder()
    {
        return view('placeholders.views.partials.header-table-skeleton');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.applications.index', [
            'applications' => Application::with(['account', 'business', 'service', 'status'])->orderByDesc('created_at')->paginate(20),
        ]);
    }
}
