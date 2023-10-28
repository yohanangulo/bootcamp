<article {{$attributes->merge(['class' => "p-4 border-l-4 $color"])}} role="alert">
  <h1 class="font-bold">{{ $title }}</h1>
  {{ $slot }}
</article>