<div class="flex space-x-4 divide-x-2">
    <div class="w-52 bg-highlights rounded-md">
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
        <div class="mt-2 flex m-1">
            <input type="text"
                placeholder="QR Code"
                class="form-input w-full "
                name="qrcode"
                id="qrcode">
        </div>
    </div>
    <div class="w-full border-l pl-4">
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
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden  border md:rounded-lg">
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
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse ($customers as $item)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            32423498320021
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            Lindsay Walton
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            Room 1
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            2022-06-30
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            Not Yet
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <button class="button-primary">
                                                Check In
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"
                                            class="text-center text-sm text-gray-500 py-3">
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
    </div>
</div>
