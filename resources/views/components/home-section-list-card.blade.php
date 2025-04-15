<div class="flex flex-col gap-4">
    @foreach ($lists as $list)
        <div class="flex gap-4 items-center">
            <i class="fa-solid fa-circle-check text-blue-500"></i>
            <li>{{$list}} </li>
        </div>
    @endforeach

</div>
