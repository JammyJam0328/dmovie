<div>
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
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
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
                                            <button x-on:click="$dispatch('show-payment',{
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

                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
