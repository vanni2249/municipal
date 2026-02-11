 @props(['label' => '', 'value' => ''])

<div {{ $attributes->merge(['class' => '']) }}>
   @if ($label)
   <label for="{{ $label }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
   @endif
   <div class=" text-gray-900 bg-gray-100 p-2 rounded">
      {{ $value }}
      {{ $slot }}
   </div>
</div>