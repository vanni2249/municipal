@props(['amount' => 0])

@if ($amount > 0)
    ${{ number_format($amount, 2) }}
@endif