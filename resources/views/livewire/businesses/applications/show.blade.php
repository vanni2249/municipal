<div>
    <x-card>
        <x-card-header class="flex justify-between items-start space-x-2">
            <div>

                <span class="text-gray-700 font-semibold text-sm">
                    {{ $application->number }}
                </span>
                <x-h1>{{ $application->service->title }}</x-h1>
                <span class="text-gray-700">{{ $application->service->title }}</span>
            </div>
            <div>
                <x-badge label="{{ $application->status->statusType->name }}" variant="{{ $application->status->statusType->variant }}" />
            </div>
        </x-card-header>
    </x-card>
</div>