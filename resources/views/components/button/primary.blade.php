<div>
    <button wire:loading.attr="disabled"
        class="px-3 py-1 duration-150 ease-in-out bg-gray-700 border rounded-full text-gray-50 hover:bg-gray-600 focus:text-white focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">
        {{ $slot }}
    </button>
</div>
