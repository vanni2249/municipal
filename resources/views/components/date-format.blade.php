@props(['date' => null, 'format' => 'F j, Y, g:i a'])

{{ \Carbon\Carbon::parse($date)->format($format) }}