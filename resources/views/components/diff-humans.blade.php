@props(['date' => null,])

{{ \Carbon\Carbon::parse($date)->diffForHumans() }}