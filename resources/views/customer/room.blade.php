@extends('layouts.customer')
@section('main')
    <div x-data="{ roomSelectedId: '' }"
        class="mt-5">
        <div class="">
            <div class="mx-auto ">
                <div class="px-4 mx-auto sm:px-4">
                    <div class="">
                        <div class="m">
                            <div class="lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
                                <div class="space-y-2 sm:space-y-2">

                                    <p class="text-2xl font-bold text-gray-700 uppercase font-poppins">Please choose any
                                        available room</p>
                                    <div class="w-40 h-1 bg-highlights"></div>
                                </div>
                                <div class="mt-5 lg:col-span-2 ">
                                    <ul role="list"
                                        class="grid grid-cols-2 gap-5 lg:grid-cols-4">
                                        @forelse ($rooms as $room)
                                            <li x-data="{ room: {{ $room }} }">
                                                <div class="space-y-4">
                                                    <button x-on:click="roomSelectedId = room.id"
                                                        class="relative w-40 h-40 border rounded-lg shadow-lg bg-gradient-to-b from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border-highlights focus:ring-highlights lg:h-40 lg:w-40">
                                                        <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80"
                                                            class="absolute top-0 h-full bg-cover rounded-lg opacity-50"
                                                            alt="">
                                                        <div class="absolute top-0 px-2 py-1 font-bold text-white rounded-tl-lg rounded-br-lg shadow bg-highlights"
                                                            x-text="'Floor #' + room.floor">
                                                        </div>
                                                        <h1 class="relative mt-2 text-4xl font-bold text-gray-700 font-poppins"
                                                            x-text="'RM #'+room.number">
                                                        </h1>
                                                    </button>
                                                </div>
                                            </li>
                                        @empty
                                            {{-- lagyan mo rey --}}
                                        @endforelse

                                        {{-- <li>
                        <div class="space-y-4">
                         <button class="relative w-40 h-40 border rounded-lg shadow-lg bg-gradient-to-b from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border-highlights focus:ring-highlights lg:h-40 lg:w-40">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute top-0 h-full bg-cover rounded-lg opacity-50" alt="">   
                                <div class="absolute top-0 px-2 py-1 font-bold text-white rounded-tl-lg rounded-br-lg shadow bg-highlights">1ST FLOOR</div>
                                <h1 class="relative mt-2 text-4xl font-bold text-gray-700 font-poppins">RM 106</h1>
                         </button>
                        </div>
                      </li>
                      <li>
                        <div class="space-y-4">
                         <button class="relative w-40 h-40 border rounded-lg shadow-lg bg-gradient-to-b from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border-highlights focus:ring-highlights lg:h-40 lg:w-40">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute top-0 h-full bg-cover rounded-lg opacity-50" alt="">   
                                <div class="absolute top-0 px-2 py-1 font-bold text-white rounded-tl-lg rounded-br-lg shadow bg-highlights">1ST FLOOR</div>
                                <h1 class="relative mt-2 text-4xl font-bold text-gray-700 font-poppins">RM 106</h1>
                         </button>
                        </div>
                      </li>
                      <li>
                        <div class="space-y-4">
                         <button class="relative w-40 h-40 border rounded-lg shadow-lg bg-gradient-to-b from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border-highlights focus:ring-highlights lg:h-40 lg:w-40">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute top-0 h-full bg-cover rounded-lg opacity-50" alt="">   
                                <div class="absolute top-0 px-2 py-1 font-bold text-white rounded-tl-lg rounded-br-lg shadow bg-highlights">1ST FLOOR</div>
                                <h1 class="relative mt-2 text-4xl font-bold text-gray-700 font-poppins">RM 106</h1>
                         </button>
                        </div>
                      </li>
                      <li>
                        <div class="space-y-4">
                         <button class="relative w-40 h-40 border rounded-lg shadow-lg bg-gradient-to-b from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border-highlights focus:ring-highlights lg:h-40 lg:w-40">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute top-0 h-full bg-cover rounded-lg opacity-50" alt="">   
                                <div class="absolute top-0 px-2 py-1 font-bold text-white rounded-tl-lg rounded-br-lg shadow bg-highlights">1ST FLOOR</div>
                                <h1 class="relative mt-2 text-4xl font-bold text-gray-700 font-poppins">RM 106</h1>
                         </button>
                        </div>
                      </li>
                      <li>
                        <div class="space-y-4">
                         <button class="relative w-40 h-40 border rounded-lg shadow-lg bg-gradient-to-b from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border-highlights focus:ring-highlights lg:h-40 lg:w-40">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute top-0 h-full bg-cover rounded-lg opacity-50" alt="">   
                                <div class="absolute top-0 px-2 py-1 font-bold text-white rounded-tl-lg rounded-br-lg shadow bg-highlights">1ST FLOOR</div>
                                <h1 class="relative mt-2 text-4xl font-bold text-gray-700 font-poppins">RM 106</h1>
                         </button>
                        </div>
                      </li>
                      <li>
                        <div class="space-y-4">
                         <button class="relative w-40 h-40 border rounded-lg shadow-lg bg-gradient-to-b from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border-highlights focus:ring-highlights lg:h-40 lg:w-40">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute top-0 h-full bg-cover rounded-lg opacity-50" alt="">   
                                <div class="absolute top-0 px-2 py-1 font-bold text-white rounded-tl-lg rounded-br-lg shadow bg-highlights">1ST FLOOR</div>
                                <h1 class="relative mt-2 text-4xl font-bold text-gray-700 font-poppins">RM 106</h1>
                         </button>
                        </div>
                      </li>
                      <li>
                        <div class="space-y-4">
                         <button class="relative w-40 h-40 border rounded-lg shadow-lg bg-gradient-to-b from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border-highlights focus:ring-highlights lg:h-40 lg:w-40">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute top-0 h-full bg-cover rounded-lg opacity-50" alt="">   
                                <div class="absolute top-0 px-2 py-1 font-bold text-white rounded-tl-lg rounded-br-lg shadow bg-highlights">1ST FLOOR</div>
                                <h1 class="relative mt-2 text-4xl font-bold text-gray-700 font-poppins">RM 106</h1>
                         </button>
                        </div>
                      </li> --}}



                                        <!-- More people... -->
                                    </ul>
                                    <div class="flex justify-between mt-5">
                                        <a href="#"
                                            class="inline-flex items-center px-5 py-3 font-black text-white border border-transparent rounded-md shadow bg-highlights font-poppins">BACK</a>
                                        <a x-bind:href="roomSelectedId ?
                                            '{{ route('checkin-information') }}?hrs={{ $hrs }}&room_type={{ $room_type }}&room_id=' +
                                            roomSelectedId : '#'"
                                            class="inline-flex items-center px-5 py-3 font-black text-white border border-transparent rounded-md shadow bg-highlights font-poppins">NEXT</a>
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
