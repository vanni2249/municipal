@props(['date' => null, 'format' => 'd/M/Y H:i:s'])

{{ \Carbon\Carbon::parse($date)->format($format) }}