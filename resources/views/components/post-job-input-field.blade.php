<div class="w-full flex flex-col gap-1">
    <label for="" class="uppercase text-xs font-bold text-gray-400">{{$label}}</label>
    <input
        type="text"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        class="border h-14 outline-none text-sm px-2 text-black rounded-sm"
    >
</div>
