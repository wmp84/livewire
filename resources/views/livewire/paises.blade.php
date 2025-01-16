<div>
    {{--    <x-button class="mb-4" wire:click="$set('count',0)">--}}
    <x-button class="mb-4" wire:click="$toggle('open')">
        Mostrar / Ocultar
    </x-button>
    {{--    @livewire('hijo')--}}
    <form class="mb-4" wire:submit="save">
        <x-input wire:model="pais" wire:keydown.space="increment" placeholder="Agregar un nuevo pais"/>
        <x-button>
            Agregar
        </x-button>
    </form>
    @if($open)
        <ul class="list-disc list-inside space-y-2">
            @foreach($paises as $index => $pais)
                <li wire:key="pais-{{$index}}">
                <span wire:mouseenter="changeActive('{{ $pais }}')">
                    ({{ $index }}){{ $pais }}
                </span>
                    <x-danger-button wire:click="delete({{ $index }})">
                        x
                    </x-danger-button>
                </li>
            @endforeach
        </ul>
    @endif
    {{$count}}
    {{$active}}
</div>
