<div x-data>
    <div class="flex justify-between p-2 bg-gray-100 rounded-md">
        <div>
            <div class="max-w-2xl mx-auto">
                <div class="flex items-center">
                    <label for="simple-search"
                        class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text"
                            id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 ease-in-out duration-300 block w-full pl-10 p-2.5"
                            placeholder="Search"
                            required>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex space-x-2">
            <button type="button"
                wire:click="notif"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white duration-150 ease-in-out border border-transparent rounded-md shadow-sm bg-highlights focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-highlights">
                Add new room
            </button>
        </div>
    </div>
    <div>
        <div class="mt-2 -mx-4 overflow-hidden border sm:-mx-6 md:mx-0 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Title
                        </th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Email
                        </th>
                        <th scope="col"
                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                        <th scope="col"
                            class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">Lindsay
                            Walton</td>
                        <td class="hidden px-3 py-4 text-sm text-gray-500 whitespace-nowrap sm:table-cell">Front-end
                            Developer</td>
                        <td class="hidden px-3 py-4 text-sm text-gray-500 whitespace-nowrap lg:table-cell">
                            lindsay.walton@example.com</td>
                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">Member</td>
                        <td class="py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                            <a href="#"
                                class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay
                                    Walton</span></a>
                        </td>
                    </tr>

                    <!-- More people... -->
                </tbody>
            </table>
        </div>
    </div>

</div>
