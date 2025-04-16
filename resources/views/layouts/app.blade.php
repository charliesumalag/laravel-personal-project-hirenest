<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Laravel Job Board</title>
        @vite(['resources/css/app.css','resources/css/custom.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen mx-auto max-w-100 bg-[#F0F3FA] text-slate-700">
        @yield('content')

        <footer class="w-full mt-32 mx-auto text-white bg-[#202942] flex flex-col justify-between  items-center py-12 h-[200px] relative">
            <div class="w-[1440px] flex justify-between items-center">
                <a href="{{ route('homepage') }}" class="flex items-center gap-2 font-bold uppercase tracking-widest text-white text-lg transition duration-500 ease-in-out" id="logotext">
                    <span class="w-7 h-7 flex items-center justify-center text-sm text-black bg-blue-500 rounded-full transition duration-500 ease-in-out" id="logospantext">H</span>
                    Hirenest
                </a>
                <ul class="flex gap-6 text-gray-400 text-sm">
                    <li><a href="{{ route('homepage') }}" class="hover:text-blue-500 transition duration-300 ease-in-out">Home</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition duration-300 ease-in-out">How it works</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition duration-300 ease-in-out">Create a job</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition duration-300 ease-in-out">About us</a></li>
                </ul>
            </div>
            <div class="text-gray-400 w-[1440px] flex justify-between items-center">
                <p class="text-sm font-thin">&copy; 2025 Hirenest. Develop by: Charlie Sumalag  ❤  </p>
                <ul class="flex justify-end gap-2 items-center">
                    <li><a href="#"><i class="fa-brands fa-github border border-gray-600 p-1 rounded-lg text-sm transition-all duration-300 ease-in-out hover:bg-blue-500 "></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin-in border border-gray-600 p-1 rounded-lg text-sm transition-all duration-300 ease-in-out hover:bg-blue-500 "></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f border border-gray-600 p-1 rounded-lg text-sm transition-all duration-300 ease-in-out hover:bg-blue-500 "></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram border border-gray-600 p-1 rounded-lg text-sm transition-all duration-300 ease-in-out hover:bg-blue-500 "></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter border border-gray-600 p-1 rounded-lg text-sm transition-all duration-300 ease-in-out hover:bg-blue-500 "></i></a></li>
                </ul>
            </div>
            <a href="#top">
                <div class="absolute top-[50%] right-[80px] py-2 px-3 rounded-lg bg-blue-500 translate-y-[-50%] cursor-pointer hover:bg-blue-600">
                    <i class="fa-solid fa-arrow-up-long text-white"></i>
                </div>
            </a>
        </footer>
    </body>
</html>
