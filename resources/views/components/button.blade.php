@props(['type' => 'button', 'variant' => 'primary', 'size' => 'md', 'disabled' => false, 'label' => null])

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
        'sm' => ' px-2 py-1 text-xs rounded-md font-semibold uppercase tracking-wider ',
        'md' => ' px-4 py-2 text-xs rounded-md font-semibold uppercase tracking-wider ',
        'lg' => ' px-6 py-3 text-base rounded-md font-semibold uppercase tracking-widest ',
        'xl' => ' px-8 py-4 text-xl rounded-md font-semibold uppercase tracking-widest ',
    ];
@endphp

<button @disabled($disabled)
    {{ $attributes->merge(['type' => $type, 'class' => $variants[$variant] . $sizes[$size] . ' text-center focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150  cursor-pointer' . ($disabled ? ' cursor-not-allowed opacity-50 whitespace-nowrap' : '')]) }}>
    {{ $label ?? '' }}
    {{ $slot }}
</button>
