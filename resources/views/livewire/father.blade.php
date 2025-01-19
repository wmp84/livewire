<div>
    <h1 class="text-2xl font-semibold">Componente padre</h1>

    <x-input wire:model.live="name"/>
    <x-section-border/>
    <div>
        {{--@livewire('children',[
        'name' => $name
        ])
        <livewire:children wire:model="name"/>--}}
        @livewire('contador',[],key('contador-1'))
        @livewire('contador',[],key('contador-2'))
        @livewire('contador',[],key('contador-3'))
        @livewire('contador',[],key('contador-4'))
        @livewire('contador',[],key('contador-5'))
        <livewire:contador key="contador-6"/>
    </div>
</div>
