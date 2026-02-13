<?php

namespace App\Livewire\Admin\Dashboard\Components;

use Livewire\Component;

class ChartApplication extends Component
{
    public $labels;
    public $data = [];

    public function mount()
    {
        $this->labels = $this->labels();
        $this->data = $this->data();
    }

     public function labels()
    {
        // Get days of the current month
        $days = range(1, now()->daysInMonth);
        return collect($days)->map(function ($day) {
            return now()->startOfMonth()->addDays($day - 1)->format('M d');
        })->toArray();
    }

    public function data()
    {
        // freturn ake data for the current month
        $data = [];
        $days = range(1, now()->daysInMonth);
        foreach ($days as $day) {
            $count = \App\Models\Application::whereDay('created_at', $day)->count() + rand(10, 50);
            $data[] = $count;
        }
        return $data;
    }
    public function render()
    {
        return view('livewire.admin.dashboard.components.chart-application', [
             'labels' => $this->labels(),
            'data' => $this->data(),
        ]);
    }
}
