@extends('layouts.app')

@section('content')
    <section class="h-screen bg-cover bg-center overflow-hidden mb-4" style="background-image:
    linear-gradient(to top, rgba(0, 0, 220, 0.5), rgba(0, 0, 0, 0.7)),
    url('{{ asset('images/homepage/hero.jpg') }}')">
        <x-navbar></x-navbar>
        </div>

    </section>
    <section>
        <h1 class="text-2xl text-bold">Second Section</h1>
    </section>
@endsection
