<form method="GET" action="{{ route('jobs.index') }}" class=" bg-[#F0F3FA] w-full rounded-lg  flex px-4 py-2 gap-2">
    <div class="w-full">
        <i class="fa-solid fa-magnifying-glass text-blue-500"></i>
        <input type="text" name="title" placeholder="search job" class="border-0 h-16 px-2 text-gray-500 bg-[#F0F3FA] font-sans focus:outline-none">
    </div>
    <div class="w-full border-0 border-l-gray-300 border-l-2 px-2 flex items-center">
        <i class="fa-solid fa-location-dot text-blue-400 text-lg" ></i>
        <input type="text" name="location" placeholder="search location" class="bg-[#F0F3FA] focus:outline-none h-16 px-2 text-gray-500 font-sans">
    </div>
    <div class="w-full border-0 border-l-gray-300 border-l-2  flex items-center px-2">
        <i class="fa-solid fa-suitcase text-blue-500"></i>
        <select name="jobtype" class="px-2 border-0 h-16 w-52 text-gray-400 outline-none bg-[#F0F3FA]">
            <option value=""  disabled selected>Select Job Type</option>
            <option value="Full Time" class="text-gray-700 font-sans">Full Time</option>
            <option value="Part Time" class="text-gray-700">Part Time</option>
            <option value="Remote" class="text-gray-700">Remote Work</option>
            <option value="Freelance" class="text-gray-700">Freelance</option>
        </select>
    </div>
    <div class="w-full bg-blue-500 flex items-center justify-center rounded-lg transition-all duration-400 ease-in hover:bg-blue-700 cursor-pointer">
        <button type="submit" class="h-10 px-16 rounded-md font-bold text-[#F0F3FA]" type="submit">Search</button>
    </div>
</form>
