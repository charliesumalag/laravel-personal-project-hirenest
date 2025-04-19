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
                <li><a href="{{ route('jobs.index') }}" id="nav-menu" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Jobs</a></li>
                <li><a href="#" id="nav-menu" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Blog</a></li>
                @auth
                    @if(auth()->user()->role === 'employer')
                        <a href="{{ route('create') }}" class="px-6 py-2 text-xs rounded-md border border-white font-medium text-white uppercase tracking-wide transition-all duration-300 ease-in-out hover:bg-white hover:text-black">
                            Post a Job
                        </a>
                    @endif
                    <a href="/profile" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Profile</a>
                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <button type="submit" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Logout</button>
                    </form>
                @else
                    <a href="{{ route('auth.login') }}" class="uppercase tracking-wider transition-all duration-300 ease-in-out hover:text-gray-100">Login</a>
                @endauth
            </ul>

        </nav>
    </div>
</nav>
