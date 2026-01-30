<div>
    <x-card class="col-span-full lg:col-span-7 min-h-96">
        <x-card-header>
            <x-h2 value="Aplicaciones" />
        </x-card-header>
        <x-card-elements-group>
            @forelse ($applications as $application)
                <x-card-element class="border-l-4 border-green-400 hover:bg-gray-50">
                    <a href="{{ route('businesses.applications.show', $application->ulid) }}">
                        <header class="flex justify-between space-x-2 items-start">
                            <p class="text-sm md:text-md font-bold">{{ $application->service->title }}</p>
                            <div>
                                <x-badge label="{{ $application->status->statusType->name }}" color="{{ $application->status->statusType->variant }}" />
                            </div>
                        </header>
                        <ul class="flex space-x-3 text-sm text-gray-800 mt-2">
                            <li>
                                {{ $application->number }}
                            </li>
                            <li>
                                |
                            </li>
                            <li>
                                <x-date-format :date="$application->created_at" format="d M Y h:i a" />
                            </li>
                        </ul>
                    </a>
                </x-card-element>

            @empty
            @endforelse
        </x-card-elements-group>
    </x-card>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
