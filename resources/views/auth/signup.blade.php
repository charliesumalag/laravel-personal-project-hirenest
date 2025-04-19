@extends('layouts.app')

@section('content')
<div style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)), url('{{ asset('images/auth/signup.jpg') }}');" class="bg-cover bg-center h-screen text-white flex items-center justify-center">
    <div class="w-[1200px] flex  justify-end">
        <form class=" w-[480px] text-gray-600 flex flex-col bg-white p-10 gap-6  rounded-md" method="POST" action="{{ route('auth.store') }}">
            @csrf
            <a href="{{ route('homepage')}}" class="flex justify-center items-center  gap-2 font-bold uppercase tracking-widest text-xl  transition duration-500 ease-in-out" id="logotext">
                <p class="w-7 text-white h-7 bg-blue-500 flex items-center justify-center rounded-full transition duration-500 ease-in-out text-sm" id="logospantext ">H</p>
                Hirenest
            </a>
            <H4 class="uppercase text-sm -tracking-tight font-medium">Register Your Account</H4>
            <div class="w-full">
                <input type="text" placeholder="Name" name="name" class="w-full bg-transparent border border-gray-200 p-2 rounded-md focus:border-blue-600 focus:outline-none text-sm text-gray-700" />
                @error('name')
                <div class="alert alert-danger text-red-500">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <input type="text" placeholder="Email" name="email" class="w-full bg-transparent border border-gray-200 p-2 rounded-md focus:border-blue-600 focus:outline-none text-sm text-gray-700"/>
                @error('email')
                <div class="alert alert-danger text-red-500">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <input type="password" placeholder="Password" name="password" class="w-full bg-transparent border border-gray-200 p-2 rounded-md focus:border-blue-600 focus:outline-none text-sm text-gray-700"/>
                @error('password')
                    <div class="alert alert-danger text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <input type="password" placeholder="Confirm password" name="password_confirmation" class="w-full bg-transparent border border-gray-200 p-2 rounded-md focus:border-blue-600 focus:outline-none text-sm text-gray-700" />
            <div>
                <select id="userType" name="role" class="w-full border p-2 rounded-md text-gray-400 focus:border-blue-600 focus:outline-none text-sm">
                    <option value=""  disabled selected hidden>Select Type</option>
                    <option value="jobseeker">Job Seeker</option>
                    <option value="employer">Employer</option>
                </select>
                @error('role')
                    <div class="alert alert-danger text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <a href="#" class="mt-2 bg-blue-600 text-white px-2 py-1 flex items-center justify-center rounded-md transition duration-300 ease-in-out cursor-pointer hover:bg-blue-800">
                <button type="submit">Register</button>
            </a>
            @if (session('success'))
            <div id="flash-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 transition">
                {{ session('success') }}
        </div>
        @endif
        </form>

    </div>
</div>
@endsection
