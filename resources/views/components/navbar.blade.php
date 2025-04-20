<nav {{ $attributes->merge(['class' => 'text-slate-500']) }}>
    <div class="container mx-auto flex justify-between items-center text-gray-100">
        <a href="{{ route('homepage')}}" class="flex justify-center items-center  gap-2 font-bold uppercase tracking-widest text-xl  transition duration-500 ease-in-out" id="logotext">
            <p class="px-1 text-black bg-blue-500 rounded-full transition duration-500 ease-in-out text-sm" id="logospantext ">H</p>
            Hirenest
        </a>
        <nav class="mt-2 text-gray-400 text-[14px] font-semibold">
            <ul class="flex gap-8 items-center">
                <li><a href="{{ route('homepage') }}" id="nav-menu" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Home</a></li>
                <li><a href="#" id="nav-menu" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">About</a></li>
                {{-- DROP DOWN FOR JOBS --}}
                <li class="relative group">
                    <div class="flex items-center gap-2 group cursor-pointer">
                        <a href="#" id="nav-menu" class="uppercase tracking-wider transition-all duration-300 ease-in-out group-hover:text-gray-100">Jobs</a>
                        <img src="{{ asset('images/homepage/downarrow.png') }}" class="w-3 h-3 group-hover:hidden" alt="">
                        <img src="{{ asset('images/homepage/downarrowhover.png') }}" class="w-3 h-3 hidden group-hover:block" alt="">
                    </div>

                    <ul class="absolute left-0 mt-4 opacity-0 overflow-hidden invisible transition-all duration-200 ease-in-out group-hover:opacity-100 group-hover:visible bg-white shadow-md rounded w-[180px]  text-gray-600 text-xs">
                        <li><a href="{{ route('jobs.index') }}" class="block px-4  py-3 hover:bg-gray-100">ALL JOBS</a></li>
                        <li><a href="{{ route('jobs.myjobposting')}}" class="block px-4 py-3 hover:bg-gray-100">MY JOB POSTING</a></li>
                        <li><a href="#" class="block px-4 py-3 hover:bg-gray-100">JOB APPLICATIONS</a></li>
                    </ul>
                </li>
                <li><a href="#" id="nav-menu" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Blog</a></li>
                @auth
                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <button type="submit" id="nav-menu" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Logout</button>
                    </form>
                    @if(auth()->user()->role === 'employer')
                        <a href="{{ route('create') }}" id="post-job" class="px-6 py-2 text-xs rounded-md border border-white font-medium text-white uppercase tracking-wide transition-all duration-300 ease-in-out">
                            Post a Job
                        </a>
                    @endif

                @else
                    <a href="{{ route('auth.login') }}" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Login</a>
                @endauth
            </ul>

        </nav>
    </div>
</nav>
