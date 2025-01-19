<?php

namespace App\Livewire;

//use Livewire\Attributes\Reactive;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class Children extends Component
{
    //#[Reactive]
    #[Modelable]
    public $name;
    public $prueba ='Hola';
    public function render()
    {
        return view('livewire.children');
    }
}
