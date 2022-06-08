<div>
    <button wire:loading.attr="disabled"
        class="px-3 py-1 text-gray-500 duration-150 ease-in-out bg-white border rounded-full focus:text-gray-600 hover:bg-gray-100 focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">
        {{ $slot }}
    </button>
</div>
