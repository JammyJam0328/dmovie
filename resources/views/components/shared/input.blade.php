<div>
    <input type="{{ $type ?? 'text' }}"
        {{ $attributes->class(['bg-red-500']) }}
        @if ($name) name="{{ $name }}" @endif
        @if ($id) id="{{ $id }}" @endif />
</div>
