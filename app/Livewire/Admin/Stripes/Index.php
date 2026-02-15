<?php

namespace App\Livewire\Admin\Stripes;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{

    public function mount()
    {
        $montoVendedor = 100.50;
        $porcentajePlataforma = 0.021;
        $stripeFee = 0.029;
        $stripeFeeFija = 0.30;

        $miComisionNeta = $montoVendedor * $porcentajePlataforma;

        $numerador = $montoVendedor + $miComisionNeta + $stripeFeeFija;

        $totalFinal = $numerador / (1 - $stripeFee);

        $totalCobrar = round($totalFinal, 2);

        $costoGestion = $totalCobrar - $montoVendedor;

        dd($totalCobrar . ' - ' . $costoGestion);
        
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.stripes.index');
    }
}
