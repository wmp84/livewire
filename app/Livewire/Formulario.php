<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class Formulario extends Component
{
    public $categories, $tags;

    public function mount()
    {
        $this->categories = Category::all();
        $this->tags = Tag::all();
    }

    public function render()
    {
        return view('livewire.formulario');
    }
}
