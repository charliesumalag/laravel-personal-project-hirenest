@extends('layouts.app')

@section('content')
    <x-section id="top" class="relative h-[40vh] bg-cover bg-center overflow-hidden mb-4" style="background-image: linear-gradient(to top, rgba(0, 0, 220, 0.5), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/heroCrop.jpg') }}')" >
        <x-navbar  id="navbar"  class="z-30 flex fixed mx-auto p-5 w-full transition duration-[800ms] ease-in-out "></x-navbar>
        <div class="text-white absolute inset-0 flex flex-col items-center justify-center text-center font-sans -tracking-tight z-10 mt-32">
            <h1 class="text-3xl font-bold text-white font-sans">{{$job->title}}</h1>
            </div>
        </div>
        <div class="absolute text-white text-sm tracking-widest bottom-4 left-[50%] translate-x-[-50%] z-20">
            <a href="{{ route('homepage') }}" class="hover:text-white text-gray-300 font-semibold font-sans transition-all duration-300 ease-in-out"><span class="">HIRENEST</span></a>
            <i class="fa-solid fa-arrow-right text-gray-300 px-4"></i>
            <a href="{{ route('jobs.index') }}" class="hover:text-white text-gray-300 font-semibold font-sans transition-all duration-300 ease-in-out"><span>JOB</span></a>
            <i class="fa-solid fa-arrow-right text-gray-300 px-4"></i>
            <span class="text-white font-semibold font-sans">JOB DETAIL</span>
        </div>
    </x-section>
    <x-section class="flex justify-center">
        <div class="w-[1150px] flex gap-2">
            <div class=" px-6 py-12 flex flex-col gap-8">
                <div class="flex flex-col gap-2">
                    <h4 class="font-semibold text-lg">Job Description</h4>
                    <p class="text-gray-500 text-[15px]">{{$job->description}}</p>
                </div>
                <iframe
                width="100%"
                height="300"
                style="border:0;"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?q={{ urlencode($job->location) }}&output=embed">
            </iframe>
            @if ($similars->count())
            <div class="flex flex-col gap-2">
                <h4 class="font-semibold text-lg mb-2">Similar Jobs</h4>
                <div class="flex gap-4">
                    @foreach ($similars as $similar)
                        <a href="{{ route('jobs.show', ['job' => $similar->id]) }}" class="w-1/2">
                            <div class="flex flex-col h-full shadow-[0_0_10px_rgba(0,0,0,0.15)] border-none rounded-md transition-all duration-300 ease-in-out hover:-translate-y-1 cursor-pointer">

                                {{-- Top Section --}}
                                <div class="flex gap-2 items-center py-6 px-4">
                                    <img src="{{ asset('images/homepage/logo.png') }}" alt="" class="w-6 h-6">
                                    <div class="text-[15px]">
                                        <h5 class="text-gray-500 text-sm">{{ $similar->title }}</h5>
                                        <p class="text-sm">{{ $similar->company }}</p>
                                    </div>
                                </div>

                                {{-- Spacer --}}
                                <div class="flex-grow"></div>

                                {{-- Bottom Section --}}
                                <div class="grid grid-cols-2 p-6 bg-[#F0F0F0]">
                                    <p class="text-sm text-gray-500">{{ $similar->location }}</p>
                                    <p class="text-sm text-gray-500">{{ $similar->jobtypes }}</p>
                                    <p class="text-sm text-gray-500">{{ number_format($similar->salary) }}</p>
                                    <p class="text-sm text-gray-500">{{ $similar->created_at->diffForHumans() }}</p>
                                </div>

                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @else
            {{-- Optional fallback text --}}
            <p class="text-gray-500 text-sm italic">No similar jobs found.</p>
        @endif
            </div>
            <div class="flex flex-col gap-8 px-6 py-12">
                <div>
                    <button class="px-16 rounded-md w-[350px] text-white py-2 bg-blue-500 hover:bg-blue-600 transition-all duration-300 ease-in-out">Apply Now</button>
                </div>
                <div class="flex flex-col bg-[#F9F9F9] rounded-md">
                    <h4 class="font-semibold text-lg bg-[#F0F0F0]  p-6">Job Summary</h4>
                    <div class="flex gap-4 flex-col  p-6">
                        <div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-location-dot text-blue-400"></i>
                                <p class="text-[15px]">Location</p>
                            </div>
                            <p class="px-5 text-gray-500 text-sm">{{$job->location}}</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-suitcase text-blue-400"></i>
                                <p class="text-[15px]">Job Type</p>
                            </div>
                            <p class="px-5 text-gray-500 text-sm">{{$job->jobtypes}}</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-peseta-sign text-blue-400"></i>
                                <p class="text-[15px]">Salary</p>
                            </div>
                            <p class="px-5 text-gray-500 text-sm">{{number_format($job->salary)}}</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-clock text-blue-400"></i>
                                <p class="text-[15px]">Date Posted</p>
                            </div>
                            <p class="px-5 text-gray-500 text-sm">{{ $job->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

@endsection
