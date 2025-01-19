<div>
    @persist('player')
    <audio src="{{asset('audios/Roxette - listen to your heart.mp3')}}" controls></audio>
    @endpersist
    <x-button wire:click="redirigir">
        Ir a prueba
    </x-button>
    <h1 class="text-2xl font-semibold">Componente padre</h1>

    <x-input wire:model.live="name"/>
    <x-section-border/>
    <div>
        {{--@livewire('children',[
        'name' => $name
        ])
        <livewire:children wire:model="name"/>--}}
        {{--@livewire('contador',[],key('contador-1'))
        @livewire('contador',[],key('contador-2'))
        @livewire('contador',[],key('contador-3'))
        @livewire('contador',[],key('contador-4'))
        @livewire('contador',[],key('contador-5'))--}}
        <livewire:contador key="contador-6"/>
    </div>

    @push('js')
        
    @endpush
    {{--<script data-navigate-once>
        //console.log('Hola desde componente padre')
        /*let a = 0;
        setInterval(() => {
            a++;
            console.log(a)
        }, 1000)*/
        document.addEventListener('DOMContentLoaded',function () {
            console.log('Hola desde el componente padre')
        })
        document.addEventListener('livewire:navigated',function () {
            console.log('Hola desde el componente padre')
        })
    </script>--}}
</div>
