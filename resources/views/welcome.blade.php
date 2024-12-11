@extends('layouts.app')

@section('title', 'Misplace')

@section('background-color', 'bg-gray-100')

@section('content')
    <section class="h-min-screen flex items-center justify-center mt-2">
        <div class="flex-1 text-start px-6 self-center place-center flex flex-col items-center justify-center">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold primary-color p-4">Streamlining the Lost and Found Process for the Carolinian community</h1>
            <p class="text-lg lg:text-xl text-start font-semibold mt-2 primary-color p-4">Recover What You've Lost, Effortlessly and Securely with MISPLACE</p>
            <div class="flex items-start space-x-4 p-4 self-start">
            @guest
                <x-primary-btn class="flex-shrink-0" formtype="a" href="/login">Login</x-primary-btn>
                <x-secondary-btn class="flex-shrink-0" id="open-modal-btn" type="button">Register</x-secondary-btn>
            @endguest    
        </div>
        </div>
        <div class="flex-1 hidden md:inline-block">
            <img class="w-5/6 h-3/4" src="{{asset('resources/images/giphy2.gif')}}" alt="magnifying glass">
        </div>
    </section>
    <x-modal>
        <h1 class="text-md uppercase text-teal-900 tracking-wider font-bold px-8 pt-2 pb-4">Register as</h1>
        
        <div class="flex space-x-8 px-8 pb-4">
            <x-secondary-btn formtype="a" href="/register/staff" class="flex-1">Staff</x-secondary-btn>
            <x-primary-btn  formtype="a" href="/register/user" class="flex-1">User</x-primary-btn>
        </div>
    </x-modal>
    <script src="{{asset('resources/js/modal.js')}}"></script>
@endsection

