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
                  
                    <p class="text-2xl text-gray-700 font-bold uppercase font-poppins">Please Select room type</p>
                    <div class="bg-highlights h-1 w-40"></div>
                  </div>
                  <div class="lg:col-span-2 mt-5 ">
                    <ul role="list" class="grid grid-cols-2 lg:grid-cols-3 gap-5">
                      <li>
                        <div class="space-y-4">
                         <button class="bg-gradient-to-b relative shadow-lg from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border border-highlights focus:ring-highlights rounded-lg lg:h-56 h-40 w-40 lg:w-56">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute opacity-50 rounded-lg top-0 h-full bg-cover" alt="">   
                          <h1 class="font-bold text-4xl relative font-poppins text-gray-700">SINGLE BED SIZE</h1>
                         </button>
                        </div>
                      </li>
                      <li>
                        <div class="space-y-4">
                         <button class="bg-gradient-to-b relative shadow-lg from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border border-highlights focus:ring-highlights rounded-lg lg:h-56 h-40 w-40 lg:w-56">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute opacity-50 rounded-lg top-0 h-full bg-cover" alt="">   
                          <h1 class="font-bold text-4xl relative font-poppins text-gray-700">DOUBLE BED SIZE</h1>
                         </button>
                        </div>
                      </li>
                      <li>
                        <div class="space-y-4">
                         <button class="bg-gradient-to-b relative shadow-lg from-transparent to-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 border border-highlights focus:ring-highlights rounded-lg lg:h-56 h-40 w-40 lg:w-56">
                              <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1106&q=80" class="absolute opacity-50 rounded-lg top-0 h-full bg-cover" alt="">   
                          <h1 class="font-bold text-4xl relative font-poppins text-gray-700">QUEEN BED SIZE</h1>
                         </button>
                        </div>
                      </li>
                   
                     
                    
            
                      <!-- More people... -->
                    </ul>
                    <div class="mt-40 flex justify-between">
                        <a href="{{route('home')}}" class="bg-highlights border border-transparent rounded-md shadow px-5 py-3 inline-flex items-center font-black font-poppins text-white">BACK</a>
                        <a href="{{route('select-room')}}" class="bg-highlights border border-transparent rounded-md shadow px-5 py-3 inline-flex items-center font-black font-poppins text-white">NEXT</a>
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