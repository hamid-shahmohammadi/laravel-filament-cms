<x-filament-panels::page>
    <script>
        var name = '{{$name}}';
    </script>
    @push('scripts')

    @vite(['resources/js/vue3.js'])
    @endpush
   <div id="app">
   
    <App></App>
   </div>
</x-filament-panels::page>
