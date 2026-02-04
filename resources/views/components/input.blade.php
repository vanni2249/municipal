@props(['disabled' => false, 'type' => 'text'])

<input {{ $attributes->merge(['type' => $type, 'class' => ' appearance-none  border-gray-100 focus:border-indigo-500 focus:ring-indigo-500 border border-gray-300 rounded p-2.5 placeholder:text-sm']) }} @disabled($disabled)>
