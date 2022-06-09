<div x-data="{ isOpen: false }"
    x-on:create-room.window="isOpen=true">
    <div x-cloak
        x-show="isOpen"
        class="relative z-10"
        aria-labelledby="slide-over-title"
        role="dialog"
        aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
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
                        <form x-on:click.away="isOpen=false"
                            class="flex flex-col h-full overflow-y-scroll bg-white border-l-4 shadow-xl border-highlights">
                            @csrf
                            <div class="flex-1">
                                <!-- Header -->
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
                                                <!-- Heroicon name: outline/x -->
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

                                <div class="py-6 space-y-6 sm:space-y-0 sm:divide-y sm:divide-gray-200 sm:py-0">
                                    <div
                                        class="px-4 space-y-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
                                        <div>
                                            <label class="block font-medium text-gray-900 sm:mt-px sm:pt-2">
                                                Room Number
                                            </label>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <x-shared.input placeholder="ex. 6" />
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
                                            <x-shared.select>
                                                <option value="">Select</option>
                                                <option value="public">Public</option>
                                                <option value="private">Private</option>
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
                                            <x-shared.select>
                                                <option value="">Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
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
                                            <x-shared.textarea rows="5" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action buttons -->
                            <div class="flex-shrink-0 px-4 py-5 border-t border-gray-200 sm:px-6">
                                <div class="flex justify-end space-x-3">
                                    <x-button.primary wire:click.prevent="go"
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
