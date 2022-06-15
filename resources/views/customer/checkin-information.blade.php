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
                                   <livewire:customer.checkin-form :infos="request()->all()"
                                   
                                   />
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
