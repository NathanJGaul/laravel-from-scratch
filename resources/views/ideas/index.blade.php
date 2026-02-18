<x-layout>
    <div>
        <h2 class="font-bold">Your Ideas</h2>

        <ul class="grid grid-cols-2 gap-x-6 gap-y-6 mt-4">
            @foreach ($ideas as $idea)
                <x-idea-card href="/ideas/{{ $idea->id }}">
                    {{ $idea->description }}
                </x-idea-card>
            @endforeach
        </ul>
    </div>
</x-layout>
