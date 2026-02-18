<a {{ $attributes->merge(['class' => 'card bg-neutral w-96 shadow-sm']) }}>
    <div class="card-body">
        <h2 class="card-title">{{ $slot }}</h2>
    </div>
</a>
