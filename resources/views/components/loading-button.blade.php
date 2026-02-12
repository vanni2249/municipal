@props(['type' => 'button', 'variant' => 'primary', 'size' => 'md', 'disabled' => true, 'label' => null])

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
        'sm' => ' px-2 py-1.5 text-xs rounded-md font-semibold uppercase tracking-wider ',
        'md' => ' px-4 py-2.5 text-xs rounded-md font-semibold uppercase tracking-wider ',
        'lg' => ' px-6 py-3 text-base rounded-md font-semibold uppercase tracking-widest ',
        'xl' => ' px-8 py-3.5 text-xl rounded-md font-semibold uppercase tracking-widest ',
    ];
@endphp

<button
    {{ $attributes->merge(['type' => 'button', 'class' => $variants[$variant] . $sizes[$size] . ' focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150 cursor-not-allowed opacity-75 whitespace-nowrap']) }} disabled>
    <span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-loader size-4 animate-spin">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 6l0 -3" />
            <path d="M16.25 7.75l2.15 -2.15" />
            <path d="M18 12l3 0" />
            <path d="M16.25 16.25l2.15 2.15" />
            <path d="M12 18l0 3" />
            <path d="M7.75 16.25l-2.15 2.15" />
            <path d="M6 12l-3 0" />
            <path d="M7.75 7.75l-2.15 -2.15" />
        </svg>
    </span>
    <span>
        Prosesando...
    </span>
</button>
