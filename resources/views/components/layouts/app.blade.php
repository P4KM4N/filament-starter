<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    {{ seo()->render() }}

    @stack('head')

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="font-sans text-base leading-normal tracking-normal text-gray-800">
    <div class="flex flex-col min-h-screen">
      @persist('header')
      <x-sections.header />
      @endpersist

      <div class="flex-1">
        {{ $slot }}
      </div>

      @persist('footer')
      <x-sections.footer />
      @endpersist
    </div>

    @livewireScriptConfig
    @stack('scripts')
  </body>
</html>
