@props(['type' => 'button', 'variant' => 'primary', 'size' => 'md', 'icon' => 'edit'])

@php
    $variants = [
        'primary' =>
            ' bg-black border border-transparent text-white hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900',
        'primary-outline' =>
            ' bg-transparent border border-gray-700 text-black hover:bg-gray-700 hover:text-white focus:bg-gray-700 active:bg-gray-900',
        'secondary' =>
            ' bg-transparent border border-gray-500 text-gray-500 hover:bg-gray-600 focus:bg-gray-600 active:bg-gray-700',
        'success' =>
            ' bg-green-500 border border-transparent text-white hover:bg-green-600 focus:bg-green-600 active:bg-green-700',
        'success-outline' =>
            ' bg-transparent border border-green-500 text-green-500 hover:bg-green-500 hover:text-white focus:bg-green-600 active:bg-green-700',
        'danger' =>
            ' bg-red-500 border border-transparent text-white hover:bg-red-600 focus:bg-red-600 active:bg-red-700',
        'danger-outline' =>
            ' bg-transparent border border-red-500 text-red-500 hover:bg-red-500 hover:text-white focus:bg-red-600 active:bg-red-700',
        'warning' =>
            ' bg-yellow-400 border border-transparent text-black hover:bg-yellow-500 focus:bg-yellow-500 active:bg-yellow-600',
        'warning-outline' =>
            ' bg-transparent border border-yellow-400 text-yellow-500 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500 active:bg-yellow-600',
        'info' =>
            ' bg-blue-500 border border-transparent text-white hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-700',
        'info-outline' =>
            ' bg-transparent border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white focus:bg-blue-600 active:bg-blue-700',
        'light' =>
            ' bg-gray-200 border border-gray-200 text-gray-700 hover:bg-gray-300 hover:border-gray-300 focus:bg-gray-300 active:bg-gray-400',
        'light-outline' =>
            ' bg-transparent border border-gray-300 text-gray-500 hover:bg-gray-300 hover:text-gray-600 focus:bg-gray-300 active:bg-gray-200',
        'dark' =>
            ' bg-gray-800 border border-transparent text-white hover:bg-gray-900 focus:bg-gray-900 active:bg-gray-900',
        'dark-outline' =>
            ' border border-gray-800 text-gray-900 hover:text-white hover:bg-gray-900 focus:bg-gray-900 active:bg-gray-900',
    ];

    $sizes = [
        'xs' => ' p-0.5 ',
        'sm' => ' p-1',
        'md' => ' p-1.5 ',
        'lg' => ' p-2 ',
    ];
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $variants[$variant] . ' rounded-md ' . $sizes[$size] . ' cursor-pointer']) }}>

    @switch($icon)
        @case('minus')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-minus">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l14 0" />
            </svg>
        @break

        @case('plus')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
        @break

        @case('edit')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                <path d="M13.5 6.5l4 4" />
            </svg>
        @break

        @case('delete')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
            </svg>
        @break

        @case('eye')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
            </svg>
        @break

        @case('ellipsis-vertical')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
            </svg>
        @break

        @case('message-2-plus')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-message-2-plus">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 9h8" />
                <path d="M8 13h6" />
                <path d="M12.5 20.5l-.5 .5l-3 -3h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5" />
                <path d="M16 19h6" />
                <path d="M19 16v6" />
            </svg>
        @break

        @default
    @endswitch

</button>
