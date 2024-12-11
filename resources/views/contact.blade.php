@extends('layouts.app')

@section('title', 'Misplace')

@section('background-color', 'bg-gray-100')

@section('content')
    <div class="block lg:flex ">
        <div class="flex flex-col space-y-4 flex-1 justify-between my-8">
            <div class="flex justify-evenly my-2 space-x-2">
                <x-staff-card></x-staff-card>
                <x-staff-card></x-staff-card>
            </div>
            <div class="flex justify-evenly my-2 space-x-2">
                <x-staff-card></x-staff-card>
                <x-staff-card></x-staff-card>
            </div>
            <div class="flex flex-col items-start">
                <h1 class="text-gray-900 font-semibold text-md">Email us</h1>
                <h1 class="text-gray-600 text-sm ms-4">misplace@gmail.com</h1>
                <h1 class="text-gray-900 font-semibold text-md">Phone us</h1>
                <h1 class="text-gray-600 text-sm ms-4">+639741944988</h1>
            </div>
            <div class="flex justify-between px-12">
                <a href="#" class="text-gray-600 text-xs  sm:text-sm md:text-md self-start">misplace@gmail.com</a>
                <a href="#" class="text-gray-600 text-xs sm:text-sm md:text-md">Facebook</a>
                <a href="#" class="text-gray-600 text-xs sm:text-sm md:text-md">Instagram</a>
            </div>
        </div>
        <div class="hidden lg:flex-1 lg:block h-screen">
            <img src="{{asset('resources/images/bunzel.jpg')}}" alt="placeholder image" class="object-cover object-center w-full h-full">
        </div>
    </div>
@endsection