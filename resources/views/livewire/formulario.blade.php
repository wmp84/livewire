<div>
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <form wire:submit="save">
            <div class="mb-4">
                <x-label>Nombre</x-label>
                <x-input class="w-full" wire:model="title" required/>
            </div>
            <div class="mb-4">
                <x-label>Contenido</x-label>
                <x-textarea class="w-full" wire:model="content" required/>
            </div>
            <div class="mb-4">
                <x-label>Categoría</x-label>
                <x-select wire:model="category_id">
                    <option value="" disabled>Seleccione una categoría</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                    @endforeach
                </x-select>
            </div>
            <div class="mb-4">
                <x-label>Etiquetas</x-label>
                <ul>
                    @foreach($tags as $tag)
                        <li>
                            <x-label>
                                <x-checkbox wire:model="selectedTags" value="{{$tag->id}}"/>
                                {{$tag->name}}
                            </x-label>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex justify-end">
                <x-button>Crear</x-button>
            </div>
        </form>
    </div>
    <div class="bg-white shadow rounded-lg p-6">
        <ul class="list-disc list-inside">
        @forelse($posts as $post)
            <li>
                {{$post->title}}
            </li>
            @empty
        @endforelse
        </ul>
    </div>
</div>
