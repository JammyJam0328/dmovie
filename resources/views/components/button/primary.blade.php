@props([
    'label' => null,
    'type' => null,
    'icon' => null,
    'loading' => false,
])

<div>
    <button type="{{ $type ?? 'button' }}"
        {{ $attributes->whereStartsWith('wire:click') }}
        wire:loading.attr="disabled"
        wire:loading.class="cursor-wait"
        class="inline-flex {{ $icon ? 'flex items-center justify-center space-x-1' : '' }}    items-center px-4 py-2 text-sm font-medium text-white  ease-in-out duration-150 border border-transparent rounded-md shadow-sm bg-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-highlights">
        @if ($icon)
            <span>
                {{ $icon }}
            </span>
        @endif
        <span>
            {{ $label }}
        </span>
    </button>
</div>
