@props([
    'id' => '',
    'name' => '',
])
@php
if ($attributes->whereStartsWith('wire:model')->first()) {
    $id = $attributes->get('wire:model');
    $name = $attributes->get('wire:model');
} else {
    $id = Str::random(20);
    $name = $id;
}
@endphp
<div>
    @if ($attributes->whereStartsWith('label')->first())
        <label class="text-gray-500"
            for="{{ $id }}">{{ $attributes->get('label') }}</label>
    @endif
    <textarea {{ $attributes->whereStartsWith('wire:model') }}
        {{ $attributes->whereStartsWith('placeholder') }}
        {{ $attributes }}
        {{ $attributes->class(['shadow-sm focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border-gray-300 rounded-md']) }}
        name="{{ $name }}"
        id="{{ $id }}"></textarea>
    @if ($attributes->whereStartsWith('wire:model')->first())
        @error($attributes->whereStartsWith('wire:model')->first())
            <div class="mt-2 text-xs text-red-500">{{ $message }}</div>
        @enderror
    @endif
</div>
