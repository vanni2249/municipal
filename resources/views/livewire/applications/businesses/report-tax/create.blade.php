<div class="space-y-2">
    <x-card>
        <x-breadcrumb :array="[
            [
                'label' => 'Comerciantes',
                'href' => route('admin.merchants', ['department' => request()->department()]),
            ],
            [
                'label' => $business->account->name(),
                'href' => route('admin.merchants.show', [
                    'department' => request()->department(),
                    'merchant' => $business->account->ulid,
                ]),
            ],
            [
                'label' => $business->name,
                'href' => route('admin.merchants.businesses.show', [
                    'department' => request()->department(),
                    'merchant' => $business->account->ulid,
                    'business' => $business->ulid,
                ]),
            ],
        
            [
                'label' => $service->title,
                'href' => null,
            ],
        ]" />
        <x-h1 value="{{ $service->title }}" />
    </x-card>
    <x-card>
        <p>
            Non existe un formato específico para este trámite.
        </p>
    </x-card>
</div>
