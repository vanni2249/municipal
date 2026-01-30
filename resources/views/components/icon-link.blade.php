@props(['variant' => 'primary', 'icon' => 'edit'])

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
@endphp

<a {{ $attributes->merge(['class' => $variants[$variant] . ' rounded-md p-1.5 cursor-pointer']) }}>

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

        @case('phone')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            </svg>
        @break

        @case('message')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 9h8" />
                <path d="M8 13h6" />
                <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
            </svg>
        @break

        @case('arrow-right')
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                <path fill-rule="evenodd"
                    d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z"
                    clip-rule="evenodd" />
            </svg>
        @break

        @case('arrow-left')
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        @break

        @default
    @endswitch

</a>
