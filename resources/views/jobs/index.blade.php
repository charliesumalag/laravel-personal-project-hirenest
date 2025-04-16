@extends('layouts.app')

@section('content')
    <x-section id="top" class="relative h-[40vh] bg-cover bg-center mb-4" style="background-image: linear-gradient(to top, rgba(0, 0, 220, 0.5), rgba(0, 0, 0, 0.7)), url('{{
        asset('images/homepage/heroCrop.jpg') }}')" >
        <x-navbar  id="navbar"  class="z-30 flex fixed mx-auto p-5 w-full transition duration-[800ms] ease-in-out "></x-navbar>
        <div class="text-white absolute inset-0 flex flex-col items-center justify-center text-center font-sans -tracking-tight z-10 mt-32">
            <h1 class="text-3xl font-bold text-white font-sans">Job Vacancies</h1>
            </div>
        </div>
        <div class="w-[1200px] absolute z-10 left-[50%] translate-x-[-50%] bottom-[-50px] border-2 border-gray-200 overflow-hidden rounded-lg">
            <x-search-form/>
        </div>
    </x-section>
    <x-section class="my-36">
        <div class=" gap-6 flex flex-col w-[1200px] mx-auto">
            @foreach ($jobs as $job)
                <x-job-card :job="$job"/>
            @endforeach
            {{ $jobs->links('pagination::tailwind') }}
        </div>
    </x-section>
@endsection
