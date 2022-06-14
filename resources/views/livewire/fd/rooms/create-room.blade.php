<div x-data="{ isOpen: false }"
    x-on:create-room.window="isOpen=true"
    x-on:close-create-room.window="isOpen=false">

    <div x-cloak
        x-show="isOpen"
        class="relative z-10"
        aria-labelledby="slide-over-title"
        role="dialog"
        aria-modal="true">

        <div x-show="isOpen"
            class="fixed inset-0"></div>

        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="fixed inset-y-0 right-0 flex max-w-full pl-10 pointer-events-none sm:pl-16">

                    <div x-show="isOpen"
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full"
                        class="w-screen max-w-2xl pointer-events-auto">
                        {{-- form --}}
                        <form wire:submit.prevent="submitHandler()"
                            class="flex flex-col h-full overflow-y-scroll bg-white border-l-4 shadow-xl border-highlights">
                            @csrf
                            <div class="flex-1">
                                <div class="px-4 py-6 bg-gray-50 sm:px-6 ">
                                    <div class="flex items-start justify-between space-x-3">
                                        <div class="space-y-1">
                                            <h2 class="text-xl font-bold text-gray-900"
                                                id="slide-over-title">
                                                Create Room
                                            </h2>
                                        </div>
                                        <div class="flex items-center h-7">
                                            <button type="button"
                                                x-on:click="isOpen=false"
                                                class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Close panel</span>
                                                <svg class="w-6 h-6"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2"
                                                    stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- form inputs --}}
                                <div class="py-6 space-y-6 sm:space-y-0 sm:divide-y sm:divide-gray-200 sm:py-0">
                                    <div
                                        class="px-4 space-y-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
                                        <div>
                                            <label class="block font-medium text-gray-900 sm:mt-px sm:pt-2">
                                                Room Number
                                            </label>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <x-shared.input wire:model.defer="room_number"
                                                type="number"
                                                placeholder="ex. 6" />
                                        </div>
                                    </div>
                                    <div
                                        class="px-4 space-y-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
                                        <div>
                                            <label class="block font-medium text-gray-900 sm:mt-px sm:pt-2">
                                                Type
                                            </label>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <x-shared.select wire:model.defer="room_type">
                                                <option value="">Select</option>
                                                @foreach ($room_types as $room_type)
                                                    <option value="{{ $room_type->id }}">{{ $room_type->name }}
                                                    </option>
                                                @endforeach
                                            </x-shared.select>
                                        </div>
                                    </div>
                                    <div
                                        class="px-4 space-y-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
                                        <div>
                                            <label class="block font-medium text-gray-900 sm:mt-px sm:pt-2">
                                                Floor
                                            </label>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <x-shared.select wire:model.defer="room_floor">
                                                <option value=""
                                                    selected>Select</option>
                                                @for ($i = 1; $i < 10; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </x-shared.select>
                                        </div>
                                    </div>
                                    <div
                                        class="px-4 space-y-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
                                        <div>
                                            <label class="block font-medium text-gray-900 sm:mt-px sm:pt-2">
                                                Description
                                            </label>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <x-shared.textarea wire:model.defer="room_description"
                                                rows="5" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink-0 px-4 py-5 border-t border-gray-200 sm:px-6">
                                <div class="flex justify-end space-x-3">
                                    <x-button.primary type="submit"
                                        label="Save">
                                    </x-button.primary>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>


</div>
