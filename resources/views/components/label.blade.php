@props(['for' => null, 'value' => null])

{{-- Label component for form inputs --}}

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'text-sm text-gray-600 font-bold mb-1']) }}>{{ $value }}</label>