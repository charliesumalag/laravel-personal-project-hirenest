<div class="text-slate-500 pt-8">
    <div class="container mx-auto flex justify-between items-center text-gray-100">
        <a href="/" class="flex items-center gap-2 font-bold uppercase tracking-widest text-xl">
            <span class="w-10 h-10 flex items-center justify-center text-blue-950 bg-blue-500 rounded-full">H</span>
            Hirenest
        </a>
        <nav class="mt-4 text-gray-400 text-base font-semibold">
            <ul class="flex gap-8 items-center">
                <li><a href="#" class="uppercase tracking-wider text-gray-200">Home</a></li>
                <li><a href="#" class="uppercase tracking-wider">About</a></li>
                <li>
                    <a href="#" class="uppercase tracking-wider">Jobs
                        <i class="fa-solid fa-arrow-down text-sm px-1"></i>
                    </a>
                </li>
                <li><a href="#" class="uppercase tracking-wider">Blog</a></li>
                <li><a href="#" class="uppercase tracking-wider">Employeres Solutions</a></li>
                <li><a href="#" class="uppercase tracking-wider">Career Resources</a></li>
                @auth
                    <a href="/profile" class="px-4">Profile</a>
                    <a href="/logout" class="px-4">Logout</a>
                @else
                    <a href="/login"  class="px-4 uppercase tracking-wider">Login</a>
                @endauth
            </ul>

        </nav>
    </div>
</div>
