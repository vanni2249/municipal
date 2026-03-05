<?php

namespace App\Livewire\Applications\Businesses\ReportTax;

use Livewire\Component;

class Create extends Component
{
    public $merchant;
    public $business;
    public $service;
    public function render()
    {
        return view('livewire.applications.businesses.report-tax.create');
    }
}
