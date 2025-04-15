@extends('layouts.app')

@section('content')
    <section class="relative h-screen bg-cover bg-center overflow-hidden mb-4" style="background-image:
    linear-gradient(to top, rgba(0, 0, 220, 0.5), rgba(0, 0, 0, 0.7)),
    url('{{ asset('images/homepage/hero.jpg') }}')">
        <x-navbar></x-navbar>
        <div class="text-white absolute inset-0 flex flex-col items-center justify-center text-center font-sans -tracking-tight">
            <div class="flex flex-col items-center gap-2">
                <h1 class="text-5xl font-bold w-4/12 text-gray-300 leading-tight">Your Next Hire Starts Here</h1>
                <p class="w-7/12 leading-7 text-xl text-gray-400">Find Jobs, Employment, and Opportunities - all in one place. We've helped companies discover top talent and job seekers land meaningful roles.</p>
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
                <div class="bg-blue-500 flex items-center rounded-lg">
                    <button class="bg-blue-500 h-10 px-16 rounded-md" type="submit">Search</button>
                </div>
            </form>
        </div>

    </section>
    <section class="mt-32 text-center">
        @php
            $testimonials = [
                ['title' => 'Web Developer', 'image' => 'images/homepage/webdeveloper.jpg'],
                ['title' => 'Mobile App Developers', 'image' => 'images/homepage/mobile-app-developer.jpg'],
                ['title' => 'Cybersecurity Specialist', 'image' => 'images/homepage/cybersecurity.jpg'],
                ['title' => 'UI/UX Designers', 'image' => 'images/homepage/uiux.png'],
                ['title' => 'Data Analysts', 'image' => 'images/homepage/data-analyst.jpg'],
                ['title' => 'Cloud Engineers', 'image' => 'images/homepage/cloud.jpg'],
                ['title' => 'DevOps Engineers', 'image' => 'images/homepage/devops.jpg'],
            ];
        @endphp

        <div class="flex flex-col gap-4 items-center">
            <h2 class="text-3xl font-bold">In Demand Opportunities</h2>
            <p class="w-5/12 text-gray-500">
                Explore a wide range of open positions. Get a personalized salary estimate tailored to your skills.
                Discover insights and reviews from over 30,000+ companies globally.
            </p>
        </div>

        <div x-data="testimonialSlider()" class="flex items-center justify-between w-[1400px] mx-auto mt-10">
            <!-- Left Arrow -->
            <button @click="prev"
                :disabled="current === 0"
                :class="{ 'opacity-50': current === 0 }"
                class="p-2 bg-gray-200 rounded-full hover:bg-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Slider Wrapper -->
            <div class="overflow-hidden w-full max-w-[1200px]">
                <div class="flex gap-12 transition-all duration-500"
                     :style="`transform: translateX(-${translateX}px)`">
                    @foreach ($testimonials as $testimonial)
                        <div class="text-center h-[200px] w-[200px] bg-cover bg-center flex-shrink-0">
                            <div class="h-full w-full bg-cover bg-center rounded-md overflow-hidden"
                                 style="background-image: url('{{ asset($testimonial['image']) }}')">
                                <div class="bg-black bg-opacity-50 h-full flex items-end justify-center p-4">
                                    <h3 class="text-white text-xl font-semibold">{{ $testimonial['title'] }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Arrow -->
            <button @click="next"
                    :disabled="current >= maxScrollIndex"
                    :class="{ 'opacity-50': current >= maxScrollIndex }"
                    class="p-2 bg-gray-200 rounded-full hover:bg-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>
    <hr>
    <div class="mt-[20rem]">

    </div>
@endsection

<script>
    function testimonialSlider() {
        return {
            current: 0,
            total: {{ count($testimonials) }},
            visible: 5, // Number of items visible at once
            cardWidth: 250, // Width of each card including gap
            get maxScrollIndex() {
                return Math.max(0, this.total - this.visible);
            },
            next() {
                if (this.current < this.maxScrollIndex) {
                    this.current++;
                }
            },
            prev() {
                if (this.current > 0) {
                    this.current--;
                }
            },
            get translateX() {
                return this.current * this.cardWidth;
            }
        }
    }
</script>
