<div class="w-full flex flex-col gap-1">
    <label for="" class="uppercase text-xs font-bold text-gray-400">{{$label}}</label>
    <select name="" id="" class=" border h-8 outline-none text-sm px-2 py-4 text-gray-400 rounded-sm">
        {{$slot}}
        {{-- <option value="">Full Time</option>
        <option value="">Part Time</option>
        <option value="">Remote</option>
        <option value="">Freelance</option> --}}
    </select>
</div>
