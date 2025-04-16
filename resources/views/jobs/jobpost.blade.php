@extends('layouts.app')

@section('content')
    <x-section id="top" class="relative h-[40vh] bg-cover bg-center overflow-hidden mb-4" style="background-image: linear-gradient(to top, rgba(0, 0, 220, 0.5), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/heroCrop.jpg') }}')" >
        <x-navbar  id="navbar"  class="z-30 flex fixed mx-auto p-5 w-full transition duration-[800ms] ease-in-out "></x-navbar>
        <div class="text-white absolute inset-0 flex flex-col items-center justify-center text-center font-sans -tracking-tight z-10 mt-32">
            <h1 class="text-3xl font-bold text-white font-sans">Create a Job Post</h1>
            </div>
        </div>
        <div class="absolute text-white text-sm tracking-widest bottom-4 left-[50%] translate-x-[-50%] z-20">
            <a href="{{ route('homepage') }}" class="hover:text-white text-gray-300 font-semibold font-sans transition-all duration-300 ease-in-out"><span class="">HIRENEST</span></a>
            <i class="fa-solid fa-arrow-right text-gray-300 px-4"></i>
            <a href="#" class="hover:text-white text-gray-300 font-semibold font-sans transition-all duration-300 ease-in-out"><span>JOB</span></a>
            <i class="fa-solid fa-arrow-right text-gray-300 px-4"></i>
            <span class="text-white font-semibold font-sans">JOB POST</span>
        </div>
    </x-section>
    <div class="w-full pt-20 flex flex-col items-center">
        <form class="w-[700px] bg-white p-8 flex flex-col gap-6 rounded-md">
            <h2 for="" class="mb-4 text-xl">Job Details</h2>
            <x-post-job-input-field label="Job Title"/>
            <div class="w-full flex gap-4 items-center justify-between">
                <x-post-job-select-field label="Job Categories">
                    <option value="">Full Time</option>
                    <option value="">Part Time</option>
                    <option value="">Remote</option>
                    <option value="">Freelance</option>
                </x-post-job-select-field>
                <x-post-job-select-field label="Experience">
                    <option value="">Entry</option>
                    <option value="">Intermediate</option>
                    <option value="">Senior</option>
                </x-post-job-select-field>
            </div>
            <div class="flex flex-col gap-1">
                <label for="" class="uppercase text-xs font-bold text-gray-400">Job Description</label>
                <textarea name="" id="" class="w-full border h-32  py-4 outline-none text-sm p-2 text-gray-400 rounded-sm"></textarea>
            </div>
            <div class="w-full flex gap-4 items-center justify-between">
                <x-post-job-input-field label="Job Location"/>
                <x-post-job-input-field label="Salary"/>
            </div>
            <div class="text-right flex justify-end gap-4">
                <button class="border px-6 py-2 rounded-lg text-sm transition-all duration-300 ease-in-out hover:bg-gray-100">Cancel</button>
                <button class="bg-blue-500 rounded-lg px-6 py-2 text-white text-sm transition-all duration-300 ease-in-out hover:bg-blue-600">Create</button>
            </div>
        </form>
    </div>
@endsection
