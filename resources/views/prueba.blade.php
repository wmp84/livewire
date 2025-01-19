<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prueba') }}
        </h2>
    </x-slot>
    @persist('player')
    <audio src="{{asset('audios/Roxette - listen to your heart.mp3')}}" controls></audio>
    @endpersist

    <script>
        //console.log('Hola desde la página prueba')
    </script>
</x-app-layout>
