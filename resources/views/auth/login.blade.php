@extends('layouts.app')

@section('content')
<div style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('{{ asset('images/auth/signup.jpg') }}');" class="bg-cover bg-center h-screen text-white flex items-center justify-center">
    <div class="w-[1200px] flex  justify-end">
        <form class=" w-[480px] text-gray-600 flex flex-col bg-white p-10 gap-6  rounded-md" method="POST" action="{{ route('auth.authenticate') }}">
            @csrf
            <a href="{{ route('homepage')}}" class="flex justify-center items-center  gap-2 font-bold uppercase tracking-widest text-xl  transition duration-500 ease-in-out" id="logotext">
                <p class="w-7 text-white h-7 bg-blue-500 flex items-center justify-center rounded-full transition duration-500 ease-in-out text-sm" id="logospantext ">H</p>
                Hirenest
            </a>
            <H4 class="uppercase text-sm -tracking-tight font-medium">Login Your Account</H4>
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
            <div class="mt-2 bg-blue-600 text-white px-2 py-1 flex items-center justify-center rounded-md transition duration-300 ease-in-out cursor-pointer hover:bg-blue-800">
                <button type="submit">Login</button>
            </div>
            <p class="text-gray-400 font-thin text-sm">Don't have an account? <a href="{{ route('auth.create') }}" class="font-semibold text-blue-500 px-1">Sign Up</a></p>
            @if (session('message'))
                <p id="flash-message" class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative text-sm mb-4">
                    {{ session('message') }}
                </p>
            @endif
        </form>
    </div>
</div>
@endsection
