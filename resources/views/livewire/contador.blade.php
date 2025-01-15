<div>
    <x-button wire:click="decrement">-</x-button>
    <span class="mx-2">
        {{$count}}
    </span>
    <x-danger-button wire:click="increment(5)">+</x-danger-button>
</div>
