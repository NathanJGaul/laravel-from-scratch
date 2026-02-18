<x-layout>
    <div class="text-white">
        @if ($ideas->count())
            <h2 class="font-bold">Your Ideas</h2>
            <ul>
                @foreach ($ideas as $idea)
                    <li><a href="/ideas/{{ $idea->id }}" class="text-sm">{{ $idea->description }}</a></li>
                @endforeach
            </ul>
            <div class="pt-8">
                <a href="/ideas/create" class="underline">Create a new idea.</a>
            </div>
        @else
            <p>Looks like you don't have any ideas. <a href="/ideas/create" class="underline">Create a new one.</a></p>
        @endif
    </div>
</x-layout>
