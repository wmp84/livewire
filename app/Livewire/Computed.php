<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed as AttComputed;
use Livewire\Component;

class Computed extends Component
{
    public $post_id = 3;

    #[AttComputed()]
    public function post()
    {
        return Post::find($this->post_id);
    }

    public function render()
    {
        return view('livewire.computed');
    }
}
