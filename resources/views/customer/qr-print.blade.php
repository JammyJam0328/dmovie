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

                                    <p class="text-2xl text-gray-700 font-bold uppercase font-poppins">YOUR TRANSACTION QR-CODE</p>
                                    <div class="bg-highlights h-1 w-40"></div>
                                </div>
                                <div class="lg:col-span-2 mt-5 ">
                                    <div class=" rounded-lg " x-data="{keyboard:false}">
                                       <div class="flex flex-col border-2 border-highlights rounded-xl shadow-lg bg-white bg-opacity-70 justify-center py-5 items-center">
                                       <div class="bg-gradient-to-t from-gray-300 via-transparent shadow-lg to-gray-100 p-14 rounded-full  ">
                                        {{QrCode::size(200)->generate('20220612001');}}
                                       </div>
                                        <div class="mt-2">
                                            <span class="text-lg font-bold text-gray-700 underline font-poppins">20220612001</span>
                                        </div>
                                        <div class="mt-2 px-2">
                                            <p class="text-sm lg:text-lg italic text-red-600">Please take a screenshot of your transaction QR code for validation of your check-in details at the frontDesk. </p>
                                        </div>
                                       </div>
                                    </div>
                                 
                                    <div class="mt-5 flex justify-between">
                                       
                                        <a href="{{route('qr')}}"
                                            class="bg-highlights border border-transparent rounded-md shadow px-5 hidden lg:block py-3 items-center font-black font-poppins text-white">PRINT</a>
                                        <a href="{{route('qr')}}"
                                            {{-- class="bg-highlights border border-transparent rounded-md shadow px-5 lg:hidden py-3 inline-flex items-center font-black font-poppins text-white">SAVE</a> --}}
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
