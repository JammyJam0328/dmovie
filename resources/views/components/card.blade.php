@props(['border' => ''])
<div class="grid p-4 space-y-2 bg-white rounded-lg shadow">
    <div>
        {{ $slot }}
    </div>
    <div class="{{ $border ?? '' }}">
        {{ $footer ?? '' }}
    </div>
</div>
