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
        {{-- <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Lato:wght@300&family=Ubuntu:wght@700&display=swap" rel="stylesheet">  --}}

    <!-- Styles -->
    <link rel="stylesheet"
        href="{{ mix('css/app.css') }}">
      

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"
        defer></script>
   
       
   
       
</head>

<body class="bg-background lg:bg-mainback">
    <div class="max-w-6xl p-5 mx-auto lg:mt-1 mt-10 ">
        <div class="flex flex-col">
            <div class="border-b border-gray-600 flex justify-center lg:justify-start">
                <img src="{{asset('images/dmorvielogo.png')}}" class="h-24" alt="">
            </div>
            <div class="mt-3 ">
               <div class="flex items-center justify-between">
                <h1 class="text-xl lg:text-3xl font-black font-kanit text-transparent  bg-clip-text bg-gradient-to-r from-gray-700 to-highlights lg:text-left text-center">WELCOME TO D'MORVIE PENSION HOUSE</h1>
                <a href="" class="lg:flex hidden  items-center p-2 hover:text-white text-gray-700 rounded-md hover:font-medium hover:bg-highlights">
                    <span>Sign In</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                      </svg>
                </a>
               </div>
            </div>
           @yield('main')
        </div>
    </div>
    @stack('scripts')
</body> 

</html>
