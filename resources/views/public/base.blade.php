<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @vite('resources/css/app.css') --}}

    <title>Child Task Manager - @yield('title')</title>
</head>
<body class="bg-gray-50">
    
    <nav class="bg-sky-900 p-4 flex justify-between space-x-4">
        <div class="flex justify-between space-x-4">
            <ul class="flex items-center gap-4">
                <li><a href="#" class="text-gray-200 hover:text-white">Accueil</a></li>
                <li><a href="#" class="text-gray-200 hover:text-white">Présentation</a></li>
                <li><a href="#" class="text-gray-200 hover:text-white">Blog</a></li>
                <li><a href="#" class="text-gray-200 hover:text-white">Contact</a></li>
            </ul>
        </div>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-8">
  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
</svg>
</a>
    </nav>
    <div>
        @yield('content')
    </div>
    
</body>
</html>