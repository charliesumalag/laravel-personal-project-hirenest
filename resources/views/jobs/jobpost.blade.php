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
            <a href="{{ route('jobs.index') }}" class="hover:text-white text-gray-300 font-semibold font-sans transition-all duration-300 ease-in-out"><span>JOB</span></a>
            <i class="fa-solid fa-arrow-right text-gray-300 px-4"></i>
            <span class="text-white font-semibold font-sans">JOB POST</span>
        </div>
    </x-section>
    <div class="w-full pt-20 flex flex-col items-center">
        <form method="POST" action="{{ route('jobs.store') }}" class="w-[1000px] bg-white p-8 flex flex-col gap-6 rounded-md">
            @csrf
            <h2 for="" class="mb-4 text-2xl">Job Details</h2>
            <x-post-job-input-field label="Job Title" name="title"/>
            @error('title')
                <div class="alert alert-danger text-red-500">{{ $message }}</div>
            @enderror
            <x-post-job-input-field label="Company" name="company"/>
            @error('title')
                <div class="alert alert-danger text-red-500">{{ $message }}</div>
            @enderror
            <div class="w-full flex gap-4 items-center justify-between">
                <x-post-job-select-field name="jobtypes" label="Job Type" :options="[
                    'Full Time' => 'Full Time',
                    'Part Time' => 'Part time',
                    'Remote' => 'Remote',
                    'Freelance' => 'Freelance']">
                </x-post-job-select-field>
                <x-post-job-select-field label="Experience" name="experience" :options="[
                    'Entry' => 'Entry',
                    'Intermediate' => 'Intermediate',
                    'Senior' => 'Senior']">
                </x-post-job-select-field>
                @error('jobtypes')
                <div class="alert alert-danger text-red-500">{{ $message }}</div>
                @enderror
                @error('experience')
                    <div class="alert alert-danger text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label for="" class="uppercase text-xs font-bold text-gray-400">Job Description</label>
                <textarea name="description" id="" class="w-full border h-32  py-4 outline-none text-sm p-2 text-black rounded-sm">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger text-red-500">{{ $message }}</div>
            @enderror
            <div class="w-full flex gap-4 items-center justify-between">
                <x-post-job-input-field label="Job Location" name="location"/>
                <x-post-job-input-field label="Salary" name="salary"/>
            </div>
            @error('salary')
                <div class="alert alert-danger text-red-500">{{ $message }}</div>
            @enderror
            @error('location')
                <div class="alert alert-danger text-red-500">{{ $message }}</div>
            @enderror
            <div class="text-right flex justify-end gap-4">
                <button class="border px-12 py-3 rounded-lg text-sm transition-all duration-300 ease-in-out hover:bg-gray-100">Cancel</button>
                <button class="px-12 py-3 bg-blue-500 rounded-lg text-white text-sm transition-all duration-300 ease-in-out hover:bg-blue-600">Create</button>
            </div>
        </form>
    </div>
@endsection
