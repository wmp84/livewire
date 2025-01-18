<div class="bg-white shadow rounded-lg p-6">
    <form>
        <div class="mb-4">
            <x-label>Nombre</x-label>
            <x-input class="w-full"/>
        </div>
        <div class="mb-4">
            <x-label>Contenido</x-label>
            <x-textarea class="w-full"/>
        </div>
        <div class="mb-4">
            <x-label>Categoría</x-label>
            <x-select>
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
                            <x-checkbox name="tags[]" value="{{$tag->id}}"/>
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
