<div class="space-y-4">
    <x-card>
        <header>
            <x-h2 value="Aplicaciones" />
            <span class="text-sm text-gray-700">Gestiona las aplicaciones enviadas por tu negocio.</span>
        </header>
    </x-card>
    <x-card class="col-span-full lg:col-span-7">
        <x-card-elements-group>
            @forelse ($applications as $application)
                <a href="{{ route('businesses.applications.show', $application->ulid) }}" class="block" wire:navigate>
                    <x-card-element class="hover:bg-gray-50" border="{{ $application->status->statusType->variant }}">
                        <div class="flex justify-between items-start space-x-2">
                            <div class="flex-1 flex flex-col space-y-1">
                                <span class="text-gray-700 font-bold uppercase text-xs">
                                    {{ $application->number }}
                                </span>
                                <span class="text-md font-bold text-gray-900">
                                    {{ $application->service->title }}
                                </span>
                                <ul class="text-sm text-gray-600">
                                    <li>{{ $application->service->serviceType->name }}</li>
                                </ul>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <div class="flex justify-end">
                                    <x-badge label="{{ $application->status->statusType->name }}"
                                        variant="{{ $application->status->statusType->variant }}" />
                                </div>
                                <span class="hidden md:block text-sm text-gray-600">
                                    <x-date-format :date="$application->created_at" format="d M Y H:m a" />
                                </span>
                                <span class="md:hidden text-sm text-gray-600 text-right">
                                    <x-date-format :date="$application->created_at" format="d/M/Y" />
                                </span>
                            </div>
                        </div>
                    </x-card-element>
                </a>

            @empty
            @endforelse
        </x-card-elements-group>
    </x-card>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
