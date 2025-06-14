@props(['color' => 'bg-white', 'title' => '', 'actions' => ''])

<div {{ $attributes->merge(['class' => $color . ' p-4 rounded']) }}>
    <header class="flex justify-between items-center">
        <h2 class="text-xs text-gray-600 leading-3 font-bold uppercase">
            {{ $title }}
        </h2>
        <div>
            {{ $actions }}
        </div>
    </header>
    {{ $slot }} 
</div>