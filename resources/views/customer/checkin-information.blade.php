@extends('layouts.customer')
@section('main')
    <div class="mt-5">
        <div class="">
            <div class="mx-auto ">
                <div class="mx-auto px-4 sm:px-4">
                    <div class="">
                        <div class="m">
                            <div class="lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
                                <div class="space-y-2 sm:space-y-2">

                                    <p class="text-2xl text-gray-700 font-bold uppercase font-poppins">Please confirm the
                                        check-in information</p>
                                    <div class="bg-highlights h-1 w-40"></div>
                                </div>
                                <div class="lg:col-span-2 mt-5 ">
                                    <div class="bg-white p-5 rounded-lg shadow-lg" x-data="{keyboard:false}">
                                        <div 
                                            class="border border-gray-300 rounded-md px-3 py-2 lg:hidden shadow-sm focus-within:ring-1 focus-within:ring-highlights focus-within:border-highlights">
                                            <label for="name" class="block text-sm font-bold text-gray-700">YOUR COMPLETE
                                                FULLNAME</label>
                                            <input type="text" name="name" id="name" 
                                                class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 lg:text:lg"
                                                placeholder="Enter here...">
                                        </div>
                                        <div @click="keyboard = !keyboard" 
                                            class="border border-gray-300 rounded-md px-3 py-2 hidden lg:block shadow-sm focus-within:ring-1 focus-within:ring-highlights focus-within:border-highlights">
                                            <label for="name" class="block text-sm font-bold text-gray-700">YOUR COMPLETE
                                                FULLNAME</label>
                                            <input type="text" name="name" id="name" 
                                                class="block w-full input border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 lg:text:lg"
                                                placeholder="Enter here...">
                                        </div>
                                        <div x-show="keyboard" class="simple-keyboard"></div>
                                    </div>
                                    <div class="bg-white mt-2 p-5 rounded-lg shadow-lg">
                                        <span class="font-poppins font-bold text-gray-500 underline">TRANSACTION CODE:
                                            2022061001</span>
                                        <div class="">
                                            <dl class="space-y-6 ">
                                                <div class="flex items-center justify-between">
                                                    <dt class="text-sm text-gray-800">
                                                        <h1 class="font-black font-poppins underline text-xl">SINGLE BED
                                                            SIZE</h1>
                                                        <h1 class="font-bold leading-3 font-poppins text-sm">SINGLE BED SIZE
                                                        </h1>
                                                    </dt>
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
                                                        &#8369;200.00</dd>
                                                </div>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="mt-5 flex justify-between">
                                        <a href="#"
                                            class="bg-highlights border border-transparent rounded-md shadow px-5 py-3 inline-flex items-center font-black font-poppins text-white">BACK</a>
                                        <a href="{{route('qr')}}"
                                            class="bg-highlights border border-transparent rounded-md shadow px-5 py-3 inline-flex items-center font-black font-poppins text-white">CONFIRM</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
