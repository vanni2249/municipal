@props(['variant' => 'primary', 'icon' => 'edit', 'width' => 24, 'height' => 24, 'stroke' => 2, 'size' => 6])

<div class="">

    @switch($icon)
        {{-- Tabler icons --}}
        @case('minus')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="{{ $stroke }}" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-minus']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l14 0" />
            </svg>
        @break

        @case('plus')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="{{ $stroke }}" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-plus']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
        @break

        @case('edit')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="{{ $stroke }}" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-pencil']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                <path d="M13.5 6.5l4 4" />
            </svg>
        @break

        @case('delete')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-x']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
            </svg>
        @break

        @case('eye')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-eye']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
            </svg>
        @break

        @case('phone')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-phone']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            </svg>
        @break

        @case('message')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-message']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 9h8" />
                <path d="M8 13h6" />
                <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
            </svg>
        @break

        @case('home')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-home']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
            </svg>
        @break

        @case('x')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-x']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
            </svg>
        @break

        @case('arrow-narrow-left-dashed')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-left-dashed']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12h6m3 0h1.5m3 0h.5" />
                <path d="M5 12l4 4" />
                <path d="M5 12l4 -4" />
            </svg>
        @break

        @case('replace')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="currentColor"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-filled icon-tabler-replace']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 2h-4a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h4a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2z" />
                <path d="M20 14h-4a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h4a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2z" />
                <path
                    d="M16.707 2.293a1 1 0 0 1 .083 1.32l-.083 .094l-1.293 1.293h3.586a3 3 0 0 1 2.995 2.824l.005 .176v3a1 1 0 0 1 -1.993 .117l-.007 -.117v-3a1 1 0 0 0 -.883 -.993l-.117 -.007h-3.585l1.292 1.293a1 1 0 0 1 -1.32 1.497l-.094 -.083l-3 -3a.98 .98 0 0 1 -.28 -.872l.036 -.146l.04 -.104c.058 -.126 .14 -.24 .245 -.334l2.959 -2.958a1 1 0 0 1 1.414 0z" />
                <path
                    d="M3 12a1 1 0 0 1 .993 .883l.007 .117v3a1 1 0 0 0 .883 .993l.117 .007h3.585l-1.292 -1.293a1 1 0 0 1 -.083 -1.32l.083 -.094a1 1 0 0 1 1.32 -.083l.094 .083l3 3a.98 .98 0 0 1 .28 .872l-.036 .146l-.04 .104a1.02 1.02 0 0 1 -.245 .334l-2.959 2.958a1 1 0 0 1 -1.497 -1.32l.083 -.094l1.291 -1.293h-3.584a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-3a1 1 0 0 1 1 -1z" />
            </svg>
        @break

        @case('chevron-down')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-chevron-down']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M6 9l6 6l6 -6" />
            </svg>
        @break

        @case('shirt-sport')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-shirt-sport']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 4l6 2v5h-3v8a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1v-8h-3v-5l6 -2a3 3 0 0 0 6 0" />
                <path d="M10.5 11h2.5l-1.5 5" />
            </svg>
        @break

        @case('calendar-event')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="currentColor"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-filled icon-tabler-calendar-event']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M16 2a1 1 0 0 1 .993 .883l.007 .117v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 1.993 -.117l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" />
                <path d="M8 14h2v2h-2z" />
            </svg>
        @break

        @case('calendar')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-calendar-check']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M11.5 21h-5.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6" />
                <path d="M16 3v4" />
                <path d="M8 3v4" />
                <path d="M4 11h16" />
                <path d="M15 19l2 2l4 -4" />
            </svg>
        @break

        @case('calendar-dollar')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-calendar-dollar']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M13 21h-7a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" />
                <path d="M16 3v4" />
                <path d="M8 3v4" />
                <path d="M4 11h12.5" />
                <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                <path d="M19 21v1m0 -8v1" />
            </svg>
        @break

        @case('car-crane')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-car-crane']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M15 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M7 18h8m4 0h2v-6a5 5 0 0 0 -5 -5h-1l1.5 5h4.5" />
                <path d="M12 18v-11h3" />
                <path d="M3 17v-5h9" />
                <path d="M4 12v-6l18 -3v2" />
                <path d="M8 12v-4l-4 -2" />
            </svg>
        @break

        @case('report')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-report']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
                <path d="M18 14v4h4" />
                <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />
                <path d="M8 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                <path d="M14 18a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M8 11h4" />
                <path d="M8 15h3" />
            </svg>
        @break

        @case('user-start')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-user-star']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h.5" />
                <path
                    d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138" />
            </svg>
        @break

        @case('barrier-block')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="{{ $stroke }}" stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-barrier-block']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 8a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v7a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1l0 -7" />
                <path d="M7 16v4" />
                <path d="M7.5 16l9 -9" />
                <path d="M13.5 16l6.5 -6.5" />
                <path d="M4 13.5l6.5 -6.5" />
                <path d="M17 16v4" />
                <path d="M5 20h4" />
                <path d="M15 20h4" />
                <path d="M17 7v-2" />
                <path d="M7 7v-2" />
            </svg>
        @break

        @case('trash')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-trash']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 7l16 0" />
                <path d="M10 11l0 6" />
                <path d="M14 11l0 6" />
                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
            </svg>
        @break

        @case('certificate-2')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-certificate-2']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 15a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                <path d="M10 7h4" />
                <path d="M10 18v4l2 -1l2 1v-4" />
                <path d="M10 19h-2a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2" />
            </svg>
        @break

        @case('certificate')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-certificate']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 15a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                <path d="M6 9l12 0" />
                <path d="M6 12l3 0" />
                <path d="M6 15l2 0" />
            </svg>
        @break

        @case('id')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-id']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 7a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3l0 -10" />
                <path d="M7 10a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M15 8l2 0" />
                <path d="M15 12l2 0" />
                <path d="M7 16l10 0" />
            </svg>
        @break

        @case('recipt-tax')
            <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}"
                stroke-linecap="round" stroke-linejoin="round"
                {{ $attributes->merge(['class' => 'icon icon-tabler icons-tabler-outline icon-tabler-receipt-tax']) }}>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 14l6 -6" />
                <path d="M9 8.5a.5 .5 0 1 0 1 0a.5 .5 0 1 0 -1 0" fill="currentColor" />
                <path d="M14 13.5a.5 .5 0 1 0 1 0a.5 .5 0 1 0 -1 0" fill="currentColor" />
                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
            </svg>
        @break

        {{-- Heroicons --}}
        @case('arrow-right')
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                class="size-{{ $size }}">
                <path fill-rule="evenodd"
                    d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z"
                    clip-rule="evenodd" />
            </svg>
        @break

        @case('arrow-left')
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-{{ $size }}">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        @break

        @case('bars-3')
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        @break

        @case('bell')
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-{{ $size }}">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
        @break

        @case('user-circle')
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-{{ $size }}">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
        @break

        @default
    @endswitch
</div>
