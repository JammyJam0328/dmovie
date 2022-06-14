<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect"
        href="https://fonts.googleapis.com">
    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Poppins&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet"
        href="{{ mix('css/app.css') }}">

    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"
        defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="antialiased font-poppins bg-background">
    <div class="min-h-full">
        <nav class="bg-gray-700">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8"
                                src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                                alt="Workflow">
                        </div>
                        <div class="hidden ml-4 md:block">
                            <h1 class="text-3xl font-bold text-white">
                                D'Morvie Pension House
                            </h1>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="flex items-center ml-4 md:ml-6">
                            <button type="button"
                                class="p-1 text-gray-400 bg-gray-700 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">Logout</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex -mr-2 md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 bg-gray-700 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            aria-controls="mobile-menu"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
                            <svg class="block w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
                            <svg class="hidden w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden"
                id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md"
                        aria-current="page">Dashboard</a>

                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Team</a>

                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Projects</a>

                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Calendar</a>

                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Reports</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="w-10 h-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button"
                            class="flex-shrink-0 p-1 ml-auto text-gray-400 bg-gray-700 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                    <div class="px-2 mt-3 space-y-1">
                        <a href="#"
                            class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:text-white hover:bg-gray-700">Your
                            Profile</a>

                        <a href="#"
                            class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:text-white hover:bg-gray-700">Settings</a>

                        <a href="#"
                            class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:text-white hover:bg-gray-700">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mb-5">
                    <div class="sm:hidden">
                        <label for="tabs"
                            class="sr-only">Select a tab</label>
                        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                        <select id="tabs"
                            name="tabs"
                            class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            <option selected>My Account</option>
                            <option>Company</option>
                            <option>Team Members</option>
                            <option>Billing</option>
                        </select>
                    </div>
                    <div class="hidden sm:block">
                        <nav class="relative z-0 flex divide-x divide-gray-200 rounded-lg shadow"
                            aria-label="Tabs">
                            <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                            {{-- <a href="#"
                    class="relative flex-1 min-w-0 px-4 py-4 overflow-hidden text-sm font-medium text-center text-gray-900 bg-white rounded-l-lg group hover:bg-gray-50 focus:z-10"
                    aria-current="page">
                    <span>My Account</span>
                    <span aria-hidden="true"
                        class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                </a> --}}
                            <a href="{{ route('fd.dashboard') }}"
                                class="{{ Request::routeIs('fd.dashboard') ? 'text-highlights font-bold' : 'text-gray-500 hover:text-gray-700 font-medium ' }} relative  flex-1 min-w-0 px-4 py-3 overflow-hidden text-center  bg-white rounded-l-lg  group hover:bg-gray-50 focus:z-10">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        class="w-6 h-6  {{ Request::routeIs('fd.dashboard') ? 'fill-highlights ' : 'fill-gray-500 ' }}">
                                        <path fill="none"
                                            d="M0 0h24v24H0z" />
                                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                                    </svg>
                                    <span>
                                        Dashboard
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('fd.checkin') }}"
                                class="{{ Request::routeIs('fd.checkin') ? 'text-highlights font-bold' : 'text-gray-500 hover:text-gray-700 font-medium ' }} relative  flex-1 min-w-0 px-4 py-3 overflow-hidden font-medium text-center  bg-white  group hover:bg-gray-50 focus:z-10">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        class="w-6 h-6  {{ Request::routeIs('fd.checkin') ? 'fill-highlights ' : 'fill-gray-500 ' }}">
                                        <path fill="none"
                                            d="M0 0h24v24H0z" />
                                        <path
                                            d="M9 1v2h6V1h2v2h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2zm11 7H4v11h16V8zm-4.964 2.136l1.414 1.414-4.95 4.95-3.536-3.536L9.38 11.55l2.121 2.122 3.536-3.536z" />
                                    </svg>
                                    <span>
                                        Check In
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('fd.inhouse') }}"
                                class="{{ Request::routeIs('fd.inhouse') ? 'text-highlights font-bold' : 'text-gray-500 hover:text-gray-700 font-medium ' }} relative  flex-1 min-w-0 px-4 py-3 overflow-hidden font-medium text-center  bg-white  group hover:bg-gray-50 focus:z-10">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        class="w-6 h-6  {{ Request::routeIs('fd.inhouse') ? 'fill-highlights ' : 'fill-gray-500 ' }}">
                                        <path fill="none"
                                            d="M0 0h24v24H0z" />
                                        <path
                                            d="M17 19h2v-8h-6v8h2v-6h2v6zM3 19V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v5h2v10h1v2H2v-2h1zm4-8v2h2v-2H7zm0 4v2h2v-2H7zm0-8v2h2V7H7z" />
                                    </svg>
                                    <span>
                                        Inhouse Guest
                                    </span>
                                </div>
                            </a>

                            <a href="{{ route('fd.rooms') }}"
                                class="{{ Request::routeIs('fd.rooms') ? 'text-highlights font-bold' : 'text-gray-500 hover:text-gray-700 font-medium ' }} relative  flex-1 min-w-0 px-4 py-3 overflow-hidden text-center  bg-white rounded-r-lg  group hover:bg-gray-50 focus:z-10">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        class="w-6 h-6  {{ Request::routeIs('fd.rooms') ? 'fill-highlights ' : 'fill-gray-500 ' }}">
                                        <path fill="none"
                                            d="M0 0h24v24H0z" />
                                        <path
                                            d="M20 20a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9z" />
                                    </svg>
                                    <span>
                                        Rooms
                                    </span>
                                </div>
                            </a>
                        </nav>
                    </div>
                </div>
                {{ $slot }}
            </div>
        </main>
        <x-shared.notification />
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
