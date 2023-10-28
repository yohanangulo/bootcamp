@props(['type' => 'warning', ])

@php
  $colors = [
      'success' => 'border-green-500 text-green-700 bg-green-100',
      'info' => 'border-blue-500 text-blue-700 bg-blue-100',
      'warning' => 'border-orange-500 text-orange-700 bg-orange-100',
  ];

  $color = $colors[$type] ?? $colors['warning'];
@endphp

<article {{$attributes->merge(['class' => "p-4 border-l-4 $color"])}} role="alert">
  <h1 class="font-bold">{{ $attributes['title'] }}</h1>
  {{ $slot }}
</article>
