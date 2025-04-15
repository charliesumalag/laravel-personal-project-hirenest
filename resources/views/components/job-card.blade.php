<div class="p-10 flex rounded-xl justify-between items-center text-left border border-gray-100 cursor-pointer transition-transform duration-300 transform hover:-translate-y-3 hover:shadow-lg">
    <h4 class="w-[35%] font-semibold">{{$job->title}}</h4>
    <div class="flex flex-col items-start w-[15%]">
        <p class="text-blue-300 px-2 text-[10px] p-2 bg-gray-50 font-semibold rounded-lg">Full Time</p>
        <div class="flex items-center gap-2">
            <i class="fa-regular fa-clock"></i>
            <p class="text-gray-400 font-thin text-sm">{{$job->created_at->diffForHumans()}}</p>
        </div>
    </div>
    <div class="flex flex-col items-start w-[30%]">
        <div class="flex items-center gap-2">
            <i class="fa-solid fa-location-dot text-gray-300"></i>
            <p class="text-gray-400 text-sm font-thin">{{$job->location}}</p>
        </div>
        <p class="text-gray-600 text-sm">{{number_format($job->salary)}} / Month</p>
    </div>
    <div class="flex items-center gap-4 w-[20%]">
        <div class="w-[40px] h-[40px] bg-blue-50 rounded-full flex items-center justify-center text-gray-500 hover:text-white hover:bg-blue-500">
            <i class="fa-regular fa-bookmark"></i>
        </div>
        <button class="py-2 px-16 text-sm bg-blue-500 font-medium text-white rounded-lg hover:bg-blue-700">Apply</button>
    </div>
</div>
