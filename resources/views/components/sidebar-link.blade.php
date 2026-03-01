    @props(['icon' => ''])
    <a {{ $attributes->merge([
        'class' => 'group block text-white p-2 tracking-widest rounded hover:bg-gray-800 transition-all flex items-center
                            justify-between',
    ]) }}
        wire:navigate>
        <div class="flex items-center space-x-2">
            <x-icon :icon="$icon" width="18" height="18" />
            <span>
                {{ $slot }}
            </span>
        </div>
        <div class="group-hover:mr-0.5 transition-all">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-gray-200">
                <path fill-rule="evenodd"
                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </a>
