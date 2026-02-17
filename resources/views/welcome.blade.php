<x-layout>
    <h1>Hello World!</h1>
    @forelse ($tasks as $task)
        <li>{{ $task }}</li>
    @empty
        <p>There are no current tasks</p>
    @endforelse
</x-layout>
