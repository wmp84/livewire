<div>
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <ul>
            @forelse($comments as $comment)
                <li>
                    {{$comment}}
                </li>
            @empty
                <x-label class="text-red-500">No existen comentarios</x-label>
            @endforelse
        </ul>
    </div>
</div>
