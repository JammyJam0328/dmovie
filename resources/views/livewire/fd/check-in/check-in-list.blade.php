<div x-data
    class="flex space-x-4 divide-x-2">
    <div class="rounded-md w-52 bg-highlights">
        <div id="qr-code-panel pt-1">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-40 mx-auto mt-2"
                viewBox="0 0 16 16">
                <path class="fill-white"
                    d="M6 0H0v6h6V0zM5 5H1V1h4v4z" />
                <path class="fill-white"
                    d="M2 2h2v2H2V2zM0 16h6v-6H0v6zm1-5h4v4H1v-4z" />
                <path class="fill-white"
                    d="M2 12h2v2H2v-2zM10 0v6h6V0h-6zm5 5h-4V1h4v4z" />
                <path class="fill-white"
                    d="M12 2h2v2h-2V2zM2 7H0v2h3V8H2zM7 9h2v2H7V9zM3 7h2v1H3V7zM9 12H7v1h1v1h1v-1zM6 7v1H5v1h2V7zM8 4h1v2H8V4zM9 8v1h2V7H8v1zM7 6h1v1H7V6zM9 14h2v2H9v-2zM7 14h1v2H7v-2zM9 11h1v1H9v-1zM9 3V1H8V0H7v4h1V3zM12 14h1v2h-1v-2zM12 12h2v1h-2v-1zM11 13h1v1h-1v-1zM10 12h1v1h-1v-1zM14 10v1h1v1h1v-2h-1zM15 13h-1v3h2v-2h-1zM10 10v1h3V9h-2v1zM12 7v1h2v1h2V7h-2z" />
            </svg>
        </div>
        <div class="flex m-1 mt-2">
            <input type="text"
                wire:model="qr_code"
                placeholder="QR Code"
                class="w-full form-input "
                name="qrcode"
                id="qrcode">
        </div>
    </div>
    <div class="w-full pl-4 border-l">
        <div class="flex justify-between p-2 bg-gray-100 rounded-md">
            <div class="flex items-center space-x-2">
                <div>
                    <input type="text"
                        placeholder="Search"
                        class="form-input"
                        name="search"
                        id="search">
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-8">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        Qr Code
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Full Name
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Room
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Check In Date
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($customers as $customer)
                                    <tr>
                                        <td
                                            class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                            {{ $customer->qr_code }}
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $customer->customer->full_name }}
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            Room #{{ $customer->room->number }}
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $customer->check_in_date }}
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 uppercase whitespace-nowrap">
                                            {{ $customer->status }}
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                            @if ($customer->status == 'processing')
                                                <button
                                                    x-on:click="$dispatch('show-payment',{
                                                room_amount : {{ $customer->customer->bill->room_amount }},
                                                checkin_id : '{{ $customer->id }}',
                                            })"
                                                    class="button-primary">
                                                    Check In
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"
                                            class="py-3 text-sm text-center text-gray-500">
                                            No data
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal"
            x-data="{ isOpen: false, roomAmount: '', checkInId: '', depositeAmount: 200 }"
            x-on:show-payment.window="isOpen = true; roomAmount = event.detail.room_amount; checkInId = event.detail.checkin_id"
            x-on:close-payment.window="isOpen=false">
            <div x-cloak
                x-show="isOpen"
                class="relative z-10"
                aria-labelledby="modal-title"
                role="dialog"
                aria-modal="true">
                <div x-show="isOpen"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>

                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
                        <div x-show="isOpen"
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:max-w-lg sm:w-full sm:p-6">
                            <div>
                                <div
                                    class="flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-blue-600"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-5">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900"
                                        id="modal-title">
                                        Payment Information
                                    </h3>
                                    <div class="mt-2">
                                        <dl class="mt-10 space-y-6 text-sm font-medium text-gray-500">
                                            <div class="flex justify-between">
                                                <dt>Room Amount</dt>
                                                <dd class="text-gray-900"
                                                    x-text="roomAmount"></dd>
                                            </div>

                                            <div class="flex justify-between">
                                                <dt>Remote & Key Deposite</dt>
                                                <dd class="text-gray-900"
                                                    x-text="depositeAmount">200</dd>
                                            </div>
                                            <div class="flex justify-between">
                                                <dt>Total</dt>
                                                <dd class="text-gray-900"
                                                    x-text="roomAmount + depositeAmount"></dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                                <button type="button"
                                    x-on:click="$wire.payAll(checkInId)"
                                    class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                                    Pay All
                                </button>
                                <button type="button"
                                    x-on:click="$wire.payDeposit(checkInId)"
                                    class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                                    Pay Deposit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
