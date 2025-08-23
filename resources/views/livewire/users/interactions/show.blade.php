<div>
    <div class="p-4">
        <x-card>
            <header>
                <div class="flex justify-between items-center mb-2">
                    <small class="text-gray-800">{{ $interaction->getTypeNameAttribute() }}</small>
                    <x-badge color="{{ $interaction->getStatusColorAttribute() }}"
                        value="{{ $interaction->getStatusNameAttribute() }}" />
                </div>
                <div class="flex justify-between items-start gap-2">
                    <!-- Title -->
                    <div>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ $interaction->service->es_name }}
                        </h2>
                        @if ($interaction->getTypeNameAttribute() == 'Llamada')
                            <span class="text-sm text-gray-800">Teléfono:
                                {{ $interaction->phone ? $interaction->phone : $interaction->user->register->phone }}</span>
                        @endif
                    </div>
                    <!-- Button add message -->
                    <div class="">
                        <!-- Button -->
                        @if ($interaction->status == 'pending' || $interaction->status == 'in_progress')
                            <x-icon-button @click="$dispatch('open-modal', 'add-message-modal')" icon="message-2-plus" />
                        @endif
                        <!-- Modal -->
                        <x-modal name="add-message-modal" title="Añadir mensaje">
                            <form wire:submit.prevent="addMessage">
                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <div class="flex items-center justify-between">
                                            <x-label for="message" value="Escribir mensaje" />
                                            <span class="text-xs text-gray-600">240 |
                                                <span>{{ $count }}</span></span>
                                        </div>
                                        <x-textarea wire:model.live="message" class="w-full" rows="4" />
                                        @error('message')
                                            <x-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div>
                                        <x-button type="submit" class="w-full sm:w-auto">Enviar</x-button>
                                    </div>
                                </div>
                            </form>
                        </x-modal>
                    </div>
                </div>
            </header>
            <div class="grid grid-cols-1 gap-2 mt-4">
                @foreach ($messages as $message)
                    <x-card color="{{ $message->admin_created_id ? 'bg-green-200' : 'bg-gray-100' }}">
                        <header class="flex justify-between items-center mb-2">
                            <span class="text-gray-800 text-xs">
                                {{ $message->admin_created_id ? 'Respuesta del administrador' : 'Tu mensaje' }}
                            </span>
                            <span class="text-gray-600 text-xs">
                                @if ($message->user_created_id)
                                    {{ $message->getMessageReadAdmin() }}
                                @endif
                            </span>
                        </header>
                        <p>
                            {{ $message->message }}
                        </p>
                        <footer class="flex justify-start text-gray-600 items-center mt-1">
                            <span class="text-xs">
                                {{ $message->created_at->diffForHumans() }}
                            </span>
                        </footer>
                    </x-card>
                @endforeach
            </div>
        </x-card>
    </div>
</div>
