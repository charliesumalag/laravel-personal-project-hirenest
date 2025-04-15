@extends('layouts.app')

@section('content')
    <x-section class="relative h-screen bg-cover bg-center overflow-hidden mb-4" style="background-image: linear-gradient(to top, rgba(0, 0, 220, 0.5), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/hero.jpg') }}')" >
        <x-navbar  id="navbar"  class="z-30 flex mx-auto p-5 w-full fixed transition duration-[800ms] ease-in-out "></x-navbar>
        <div class="text-white absolute inset-0 flex flex-col items-center justify-center text-center font-sans -tracking-tight z-10">
            <div class="flex flex-col items-center gap-2">
                <h1 class="text-5xl font-bold w-4/12 text-gray-300 leading-tight">Where tech careers take flight</h1>
                <p class="w-7/12 leading-7 text-xl text-gray-400">Discover top opportunities in development, design, data, and more. Hirenest connects tech talent with companies that move fast and build big.</p>
            </div>
            <form class="mt-8 bg-white rounded-lg flex px-4 py-2 gap-2">
                <div>
                    <i class="fa-solid fa-magnifying-glass text-blue-500"></i>
                    <input type="text" placeholder="search" class="font-semibold border-0 h-16 px-2 text-gray-500 font-sans focus:outline-none">
                </div>
                <div class="border-0 border-l-gray-300 border-l-2 px-2 flex items-center">
                    <i class="fa-solid fa-location-dot text-blue-400 text-lg" ></i>
                    <input type="text" placeholder="select" class="font-semibold focus:outline-none h-16 px-2 text-gray-500 font-sans">
                </div>
                <div class="border-0 border-l-gray-300 border-l-2  flex items-center px-2">
                    <i class="fa-solid fa-suitcase text-blue-500"></i>
                    <input type="text" class="font-semibold px-2 text-gray-500 h-16 font-sans focus:outline-none" placeholder="select">
                </div>
                <div class="bg-blue-500 flex items-center rounded-lg transition-all duration-400 ease-in hover:bg-blue-700 cursor-pointer">
                    <button class="h-10 px-16 rounded-md font-bold" type="submit">Search</button>
                </div>
            </form>
        </div>
    </x-section>
    <x-section class="mt-36 text-center">
        @php
            $opportunities = [
                ['title' => 'Web Developer', 'image' => 'images/homepage/webdeveloper.jpg'],
                ['title' => 'Mobile App Developers', 'image' => 'images/homepage/mobile-app-developer.jpg'],
                ['title' => 'Cybersecurity Specialist', 'image' => 'images/homepage/cybersecurity.jpg'],
                ['title' => 'UI/UX Designers', 'image' => 'images/homepage/uiux.png'],
                ['title' => 'Data Analysts', 'image' => 'images/homepage/data-analyst.jpg'],
                ['title' => 'Cloud Engineers', 'image' => 'images/homepage/cloud.jpg'],
                ['title' => 'DevOps Engineers', 'image' => 'images/homepage/devops.jpg'],
            ];
        @endphp
        <div class="w-full flex justify-center">
            <x-section-header-par class="w-[40%] flex-col items-center justify-center"
                headerText="In Demand Opportunities"
                headerPar="Explore a wide range of open tech positions — from software engineering to product design. Get personalized salary insights based on your skills, and read reviews from over 30,000+ tech companies worldwide."
            />
        </div>
        <div x-data="testimonialSlider()" class="flex items-center justify-between w-[1400px] mx-auto mt-16">
            <x-slide-button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </x-slide-button>
            <div class="overflow-hidden w-full max-w-[1200px]">
                <div class="flex gap-12 transition-all duration-500">
                    @foreach ($opportunities as $opportunity)
                        <x-opportunity-card :title="$opportunity['title']" :image="$opportunity['image']" />
                    @endforeach
                </div>
            </div>
            <x-slide-button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </x-slide-button>
        </div>
    </x-section>
    <x-section class="mt-32 w-[1200px]">
        <div class="flex w-[100%] gap-4">
            <div class="w-[50%] h-[600px] bg-white relative" >
                <img src="{{ asset('images/homepage/coder2.jpg') }}" class="absolute top-0 left-0 w-[75%] h-[90%] rounded-xl z-10" alt="">
                <img src="{{ asset('images/homepage/coder.jpg') }}" class="absolute bottom-0 right-16 h-[300px] z-20 border-8 shadow-md rounded-xl border-white " alt="">
            </div>
            <div class="w-[50%] h-[600px] flex items-start justify-center flex-col">
                <x-section-header-par class="flex-col"
                    headerText="Millions of Jobs. Find the Opportunity That Fits You."
                    headerPar="Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide."
                />
                <ul class="mt-10 text-gray-500 flex gap-3">
                    <x-home-section-list-card :lists="['Tech Career Solutions for the Future. ', 'Backed by a Talented Team of Industry Experts', 'UI/UX Designer', 'Tailor Your Job Search to Fit Your Tech Skills']" />
                </ul>
            </div>
        </div>
    </x-section>
    <x-section class="mt-36 text-center">
        <div class="w-full flex justify-center text-center">
            <x-section-header-par class="flex-col justify-center items-center w-[30%]"
                headerText="Popular Job Listing"
                headerPar="Discover a wide variety of open positions. Get a tailored salary estimate based on your skills and experience. Read reviews from over 30,000+ companies globally."
            />
        </div>
        <div class="mt-10 gap-6 flex flex-col w-[1200px] mx-auto">
            @foreach ($jobs as $job)
                <x-job-card :job="$job"/>
            @endforeach
        </div>
    </x-section>
    <div class="mt-[20rem]">
    </div>
@endsection
