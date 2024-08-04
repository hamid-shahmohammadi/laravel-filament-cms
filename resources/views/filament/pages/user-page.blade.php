<x-filament-panels::page>
    <script>
        var name = '{{$name}}';
    </script>
    @push('scripts')

    @vite(['resources/js/vue3.js'])
    @endpush
   <div id="app">
    <Home></Home>
    
   </div>
</x-filament-panels::page>
