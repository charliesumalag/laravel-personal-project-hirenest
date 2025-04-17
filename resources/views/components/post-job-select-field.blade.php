<div class="w-full flex flex-col gap-1">
    <label for="{{ $name }}" class="uppercase text-xs font-bold text-gray-400">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="border h-16 outline-none text-sm px-2 text-black rounded-sm">
        @foreach ($options as $value => $label)
            <option value="{{ $value }}" {{ old($name) == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
</div>
