<div x-data>
    <div class="flex justify-between p-2 bg-gray-100 rounded-md">
        <div class="flex items-center space-x-2">
            <span class="relative z-0 inline-flex rounded-md shadow-sm">
                <button type="button"
                    wire:click="$set('status_filter', '')"
                    class="{{ $status_filter == '' ? 'text-highlights' : 'text-gray-700' }} relative inline-flex items-center px-4 py-2.5 text-sm font-medium  bg-white border border-gray-300 rounded-l-md hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:border-gray-500">
                    All
                </button>
                <button type="button"
                    wire:click="$set('status_filter', '2')"
                    class="{{ $status_filter == '2' ? 'text-highlights' : 'text-gray-700' }} relative inline-flex items-center px-4 py-2.5 -ml-px text-sm font-medium  bg-white border border-gray-300 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:border-gray-500">
                    Available
                </button>
                <button type="button"
                    wire:click="$set('status_filter', '3')"
                    class="{{ $status_filter == '3' ? 'text-highlights' : 'text-gray-700' }} relative inline-flex items-center px-4 py-2.5 -ml-px text-sm font-medium  bg-white border border-gray-300 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:border-gray-500">
                    Occupied
                </button>
                <button type="button"
                    wire:click="$set('status_filter', '4')"
                    class="{{ $status_filter == '4' ? 'text-highlights' : 'text-gray-700' }} relative inline-flex items-center px-4 py-2.5 -ml-px text-sm font-medium  bg-white border border-gray-300 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:border-gray-500">
                    Uncleaned
                </button>
                <button type="button"
                    wire:click="$set('status_filter', '1')"
                    class="{{ $status_filter == '1' ? 'text-highlights' : 'text-gray-700' }} relative inline-flex items-center px-4 py-2.5 -ml-px text-sm font-medium  bg-white border border-gray-300 rounded-r-md hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:border-gray-500">
                    Unavailable
                </button>
            </span>
        </div>
        <div class="flex space-x-2">
            <button type="button"
                x-on:click="$dispatch('create-room')"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white duration-150 ease-in-out border border-transparent rounded-md shadow-sm bg-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-highlights">
                Add new room
            </button>
        </div>
    </div>
    <div class="mt-5">
        <ul role="list"
            class="grid grid-cols-1 gap-6 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5">
            @forelse ($rooms as $room)
                <li
                    class="flex flex-col col-span-1 text-center bg-white border divide-y divide-gray-200 rounded-lg shadow-md group hover:bg-highlights">
                    <div class="flex flex-col flex-1 p-8">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-20 h-20 mx-auto fill-highlights group-hover:fill-gray-50"
                            enable-background="new 0 0 512 512"
                            viewBox="0 0 512 512">
                            <path
                                d="M298.484,227.677c0-43.356,28.759-80.012,68.139-91.832c-62.581,5.202-98.216,74.493-65.851,128.27L191.674,399.031c-2.614,3.268-4.031,7.244-3.922,11.383l0.436,17.974c0.164,3.758,1.471,7.244,3.54,10.022c1.743,2.288,4.085,4.14,6.645,5.338c3.159,1.471,6.808,2.015,10.458,1.362l17.756-3.268c4.085-0.763,7.789-2.941,10.403-6.155l8.497-10.567c2.07-2.56,3.431-5.719,3.813-9.041l0.871-7.19c0.817-6.7,5.338-12.255,11.602-14.597l0.055-0.055c6.318-2.288,10.784-7.789,11.656-14.379v-0.218c0.926-6.482,5.392-12.037,11.602-14.271l0.163-0.109c6.318-2.233,10.73-7.734,11.602-14.379l0.055-0.055c1.035-6.645,5.501-12.201,11.874-14.379l6.863-2.397c3.159-1.035,5.937-3.05,8.061-5.61l17.157-21.242C314.824,289.715,298.484,259.976,298.484,227.677z" />
                            <path
                                d="M427.004,149.346c5.3-28.487-2.601-59.481-25.414-82.293c-45.589-45.589-121.244-30.992-148.096,24.51c3.05,4.848,9.478,6.427,14.325,3.431c22.822-43.192,84.806-56.755,123.695-17.92c18.761,18.821,25.636,44.196,21.745,67.884c-6.191-1.44-12.613-2.278-19.243-2.278c-46.76,0-84.663,38.158-84.663,85.004c0,36.539,23.168,67.883,55.704,79.723v173.5c0,4.173,1.448,8.177,4.088,11.328l11.669,13.713c2.47,2.811,5.706,4.684,9.028,5.536c2.811,0.681,5.792,0.681,8.517,0c3.407-0.851,6.559-2.725,9.028-5.536l11.754-13.713c2.64-3.152,4.173-7.155,4.173-11.328v-13.543c0-3.321-0.937-6.643-2.726-9.454l-3.832-6.132c-3.578-5.707-3.578-12.861-0.171-18.653v-0.085c3.492-5.706,3.492-12.776,0-18.482l-0.085-0.171c-3.407-5.622-3.407-12.776,0-18.398l0.085-0.17c3.492-5.707,3.492-12.776,0-18.483v-0.085c-3.407-5.792-3.407-12.947,0.171-18.653l3.832-6.133c1.789-2.811,2.726-6.132,2.726-9.454v-35.603c32.537-12.01,55.619-43.268,55.619-79.723C478.935,192.522,457.529,162.256,427.004,149.346z M394.101,217.89c-12.691,0-22.997-10.306-22.997-22.997s10.306-22.997,22.997-22.997c2.959,0,5.777,0.611,8.386,1.645c-5.19,8.334-11.96,15.88-20.451,22c0.272,5.338,3.976,9.75,8.987,11.002c9.176-6.608,16.65-14.737,22.532-23.754c2.207,3.524,3.543,7.649,3.543,12.104C417.098,207.584,406.707,217.89,394.101,217.89z" />
                            <path
                                d="M315.096 85.953c0-5.719-.545-11.329-1.634-16.721-11.928 4.303-22.44 11.874-30.12 21.787-2.233 9.423-10.73 16.395-20.861 16.395-11.819 0-21.515-9.586-21.515-21.515 0-10.458 7.517-19.118 17.375-21.079 11.003-12.745 25.109-22.549 40.796-28.704-15.523-21.896-41.123-36.112-69.99-36.112H52.02c-10.458 0-18.954 8.497-18.954 18.954v133.989c0 10.458 8.497 18.955 18.954 18.955h177.128C276.642 171.903 315.096 133.449 315.096 85.953zM191.728 127.978c0 5.239-4.247 9.487-9.487 9.487H78.078c-5.239 0-9.487-4.247-9.487-9.487V43.927c0-5.239 4.247-9.487 9.487-9.487h104.163c5.239 0 9.487 4.247 9.487 9.487V127.978zM279.203 204.528c.817-5.174 2.124-10.294 3.867-15.305-4.956-4.684-9.259-9.913-12.854-15.578-4.303 2.015-8.824 3.758-13.453 5.12C262.481 188.624 270.052 197.393 279.203 204.528z" />
                        </svg>
                        <h3 class="mt-6 text-sm font-medium text-gray-900 group-hover:text-white">Room
                            {{ $room->number }}</h3>
                        <dl class="flex flex-col justify-between flex-grow mt-1 group-hover:text-white">
                            <dd class="text-sm text-gray-500 group-hover:text-white">Floor : {{ $room->floor }}</dd>
                            <dd class="text-sm text-gray-500 group-hover:text-white">{{ $room->type->name }}</dd>
                            <dd class="mt-3">
                                @switch($room->status->id)
                                    @case(1)
                                        <span class="px-2 py-1 text-xs font-medium text-gray-600 bg-white rounded-full">
                                            {{ $room->status->name }}
                                        </span>
                                    @break

                                    @case(2)
                                        <span class="px-2 py-1 text-xs font-medium text-green-800 bg-white rounded-full">
                                            {{ $room->status->name }}
                                        </span>
                                    @break

                                    @case(3)
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-white bg-blue-800 rounded-full animate-pulse">
                                            {{ $room->status->name }}
                                        </span>
                                    @break

                                    @case(4)
                                        <span class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded-full ">
                                            {{ $room->status->name }}
                                        </span>
                                    @break
                                    @default
                                @endswitch
                            </dd>
                        </dl>
                    </div>
                </li>
                @empty
                    <li class="col-span-5 p-4 ">
                        <div class="items-center justify-center flex-1 ">
                            <svg class="w-6 h-6 mx-auto text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 112 0 1 1
                                                                                                                                                                                                                                                                                                    0 01-2 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                            <h3 class="mt-6 text-sm font-medium text-center text-gray-400">No rooms found</h3>
                        </div>
                    </li>
                @endforelse
            </ul>
        </div>
        <div class="mt-4">
            {{ $rooms->links() }}
        </div>
    </div>
