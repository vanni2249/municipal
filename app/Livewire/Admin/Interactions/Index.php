<?php

namespace App\Livewire\Admin\Interactions;

use App\Models\Interaction;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $interactions;


    public function mount()
    {
        $this->interactions = Interaction::with(['service', 'user', 'messages'])->orderBy('created_at', 'desc')->get();
    }

    public function countNotReadMessages($interaction)
    {
        return $interaction->messages()->whereNull('admin_id')->whereNull('admin_read_at')->count();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.interactions.index', [
            'interactions' => $this->interactions,
        ]);
    }
}
