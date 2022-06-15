<div>
    <div class="bg-white p-5 rounded-lg shadow-lg" x-data="{keyboard:false}">
        <div 
            class="border border-gray-300 rounded-md px-3 py-2 lg:hidden shadow-sm focus-within:ring-1 focus-within:ring-highlights focus-within:border-highlights">
            <label for="name" class="block text-sm font-bold text-gray-700">YOUR COMPLETE
                FULLNAME</label>
            <input type="text" name="name" id="name" 
                class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 lg:text:lg"
                placeholder="Enter here...">
        </div>
        <div @click="keyboard = !keyboard" @click.away="keyboard = false"
            class="border border-gray-300 rounded-md px-3 py-2 hidden lg:block shadow-sm focus-within:ring-1 focus-within:ring-highlights focus-within:border-highlights">
            <label for="name" class="block text-sm font-bold text-gray-700">YOUR COMPLETE
                FULLNAME</label>
            <input type="text" wire:model="fullname"
                class="block w-full input border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 lg:text:lg"
                placeholder="Enter here...">
        </div>
        {{-- Entering: "transform transition ease-in-out duration-500 sm:duration-700"
From: "translate-x-full"
To: "translate-x-0"
Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
From: "translate-x-0"
To: "translate-x-full" --}}
        <div class="absolute bottom-0 left-0 w-full p-2 bg-gradient-to-l from-green-300 via-highlights to-green-400" x-show="keyboard" x-cloak
        x-transtion:enter="transform transition ease-in-out duration-500 sm:duration-700"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="translate-y-full"

        >
        <div  class="simple-keyboard"></div>
    </div>
    </div>
    <div class="bg-white mt-2 p-5 rounded-lg shadow-lg">
        {{-- <span class="font-poppins font-bold text-gray-500 underline">TRANSACTION CODE:
            2022061001</span> --}}
        <div class="">
            <dl class="space-y-6 ">
                <div class="flex items-center justify-between">
                    <dt class="text-sm text-gray-800">
                        <h1 class="font-black font-poppins underline uppercase text-xl">{{$room->type->name}} BED
                            SIZE</h1>
                        <h1 class="font-bold leading-3 font-poppins text-sm">RM#{{$room->number}} (FLOOR {{$room->floor}})
                        </h1>
                    </dt>
                    <dd class=" font-bold font-poppins text-gray-800">&#8369;{{number_format($price->price,2)}}</dd>
                    {{-- <dd class="font-bold font-poppins text-gray-800">&#8369;64.00</dd> --}}
                </div>
                <div class="flex items-center justify-between">
                    <dt class="text-sm text-gray-800">
                        <h1 class="font-black font-poppins underline text-xl">CHECK-IN
                            DEPOSIT</h1>
                        <h1 class="font-bold leading-3 font-poppins text-sm">TV REMOTE +
                            ROOM KEY</h1>
                    </dt>
                    <dd class=" font-bold font-poppins text-gray-800">&#8369;200.00</dd>
                </div>

                <div
                    class="flex items-center justify-between border-t border-highlights pt-3">
                    <dt class="text-xl font-poppins text-highlights font-black">TOTAL</dt>
                    <dd class=" font-bold text-xl font-poppins text-highlights">
                        &#8369;{{number_format($price->price + 200,2)}}</dd>
                </div>
            </dl>
        </div>
    </div>
    <div class="mt-5 flex justify-between">
        <a href="#"
            class="bg-highlights border border-transparent rounded-md shadow px-5 py-3 inline-flex items-center font-black font-poppins text-white">BACK</a>
        <button  wire:click="confirmCheckin"
            class="bg-highlights border border-transparent rounded-md shadow px-5 py-3 inline-flex items-center font-black font-poppins text-white">CONFIRM</button>
    </div>
</div>
</div>
