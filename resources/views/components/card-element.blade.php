@props(['border' => 'none'])

    @php
        $borders = [
            'primary' => ' border-l-4 border-gray-300 ',
            'secondary' => ' border-l-4 border-gray-400 ',
            'success' => ' border-l-4 border-green-300 ',
            'danger' => ' border-l-4 border-red-500 ',
            'warning' => ' border-l-4 border-yellow-400 ',
            'info' => ' border-l-4 border-blue-500 ',
            'light' => ' border-l-4 border-gray-200 ',
            'dark' => ' border-l-4 border-gray-800 ',
            'none' => ' border-0 ',
        ];
    @endphp

<div {{ $attributes->merge(['class' => ' ' . $borders[$border] . ' bg-gray-100 p-2 lg:p-4 rounded-md']) }}>
    {{ $slot }}
</div>