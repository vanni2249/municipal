<?php

namespace App\Livewire\Admin\Routes;

use App\Models\Route;
use App\Traits\RouteNumber;
use App\Traits\RouteUlid;
use App\Traits\StatusTypeId;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use RouteUlid, RouteNumber, StatusTypeId;
    public $route_type_id = null;

    public $inspections = [];

    public function mount()
    {
    }

    public function createRoute()
    {
        $this->validate([
            'route_type_id' => 'required|exists:route_types,id',
        ]);

        $route = Route::create([
            'ulid' => $this->createRouteUlid(),
            'number' => $this->createRouteNumber(),
            'route_type_id' => $this->route_type_id,
            'admin_id' => 1,
        ]);
        $route->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
            'admin_id' => 1,
        ]);

        $this->redirect(route('admin.routes.show', $route->ulid));
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
            'routeTypes' => \App\Models\RouteType::all(),
            'inspections' => \App\Models\Inspection::all(),
        ]);
    }
}
