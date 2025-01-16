<div>
    <form class="mb-4" wire:submit="save">
        <x-input wire:model="pais" placeholder="Agregar un nuevo pais"/>
        <x-button>
            Agregar
        </x-button>
    </form>
    <ul class="list-disc list-inside space-y-2">
        @foreach($paises as $index => $pais)
            <li wire:key="pais-{{$index}}">
                ({{ $index }}){{ $pais }}
                <x-danger-button wire:click="delete({{ $index }})">
                    x
                </x-danger-button>
            </li>
        @endforeach
    </ul>
</div>
