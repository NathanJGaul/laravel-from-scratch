@props([
    'name' => 'required',
])

@error($name)
    <p class="text-sm text-error mt-2">{{ $message }}</p>
@enderror
