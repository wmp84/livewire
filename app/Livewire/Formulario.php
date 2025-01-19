<?php

namespace App\Livewire;

use App\Livewire\Forms\PostCreateForm;
use App\Livewire\Forms\PostEditForm;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Formulario extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $categories, $tags;
    public PostCreateForm $postCreate;
    public PostEditForm $postEdit;
    #[Url(as: 's')]
    public $search = '';

    // Ciclo de vida de un componente
    public function mount()
    {
        $this->categories = Category::all();
        $this->tags = Tag::all();
    }

    public function save()
    {
        $this->postCreate->save();
        $this->resetPage(pageName: 'pagePosts');
        $this->dispatch('post-created', 'Nuevo artículo creado');
    }

    public function edit($postId)
    {
        $this->resetValidation();
        $this->postEdit->edit($postId);
    }

    public function update()
    {
        $this->postEdit->update();
        $this->dispatch('post-created', 'Artículo actualizado');
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);
        $post->delete();
        $this->dispatch('post-created', 'Artículo eliminado');
    }

    public function render()
    {
        $posts = Post::orderBy('id', 'desc')
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->paginate(5, pageName: 'pagePosts');
        return view('livewire.formulario', compact('posts'));
    }
}
