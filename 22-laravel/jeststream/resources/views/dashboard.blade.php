<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      @php
        $type = 'info'
      @endphp

      <x-alert id="alert" :type="$type" title="Something went wrong" class="mb-8">

        <x-slot name="title">
          Este es el titulo
        </x-slot>

        <p>Here is where the message goes</p>
      </x-alert>
      <p>Hola mundo</p>

      <x-alert2>

        <p>holas</p>

        <x-slot name="title">
          Este es un titulo de prueba
        </x-slot>

      </x-alert2>
    </div>
  </div>
</x-app-layout>
