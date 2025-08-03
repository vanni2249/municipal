@props(['disabled' => false, 'type' => 'text'])

<select {{ $attributes->merge(['type' => $type, 'class' => ' border-gray-100 text-sm text-gray-600 focus:border-indigo-500 focus:ring-indigo-500 border border-gray-300 rounded p-1 placeholder:text-sm']) }} @disabled($disabled)>
    {{ $slot }}
</select>