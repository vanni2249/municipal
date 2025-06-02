@props(['disabled' => false, 'type' => 'text'])

<input @disabled($disabled) {{ $attributes->merge(['class' => ' border-gray-100 focus:border-indigo-500 focus:ring-indigo-500 border border-gray-300 rounded p-1 placeholder:text-sm']) }}>
