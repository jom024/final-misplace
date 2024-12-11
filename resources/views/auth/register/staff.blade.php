@extends('layouts.auth')

@section('title', 'Misplace | Register')

@section('background-color', 'pic-bg')

@section('content')
    <section class="flex flex-col space-y-12 items-center justify-center h-screen flex-wrap">
        <div class="bg-gray-100 p-2 h-3/4 w-11/12 sm:w-9/12 rounded-lg flex drop-shadow-xl">
            <div class="flex-1 flex-shrink md:flex-shrink-0">
            <div class="block sm:ps-10">
                    <a href="/">
                        <div class="sm:w-44 sm:h-28 w-36 h-24">
                            <x-logo-sm class="w-44 h-36 object-cover object-center"/>
                        </div>
                    </a>
                </div>
                <div class="ps-0 flex justify-start flex-col 
                items-center justify-center">
                    <h1 class="text-lg font-bold text-gray-800 text-nowrap sm:text-2xl
                    md:text-3xl">Welcome to Misplace</h1>
                    <h1 class="text-md font-bold text-teal-400 text-nowrap sm:text-xl
                    md:text-2xl">Your Lost and Found Hub</h1>
                </div>
                <div class="mt-4">
                    <form action="" class="flex flex-col justify-center space-y-3 items-center lg:space-y-4">
                        @csrf
                        <x-primary-btn class="text-xs text-nowrap w-4/6 bg-teal-100 sm:text-sm md:flex-shrink-0 flex items-center justify-center gap-2">
                            <img src="{{asset('resources/images/google-icon.svg')}}" alt="google-icon" class="w-4 h-4">
                            Continue with Google</x-primary-btn>
                        <div class="ms-0 flex-1 flex items-center justify-center">
                            <span class="text-bg-400 text-xs mx-4 flex-1">or</span>
                        </div>
                        <x-form-input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" required
                        class="text-xs sm:text-sm md:flex-shrink-0"></x-form-input>
                        <x-secondary-btn id="open-modal-btn" formtype="button" type="button" class="w-4/6 text-center text-xs sm:text-sm md:flex-shrink-0">Continue with email</x-secondary-btn>
                    </form>
                </div>
            </div>
           
            <div class="flex-1 hidden lg:block py-10 pe-10">
                <img src="{{asset('resources/images/bunzel.jpg')}}" alt="bunzel bldg"
                class="w-full object-cover object-center h-full rounded-r-lg">
            </div>
        </div>
    </section>
    <x-modal class="w-11/12 sm:w-3/4 md:w-1/3 p-2 pb-4">
        <div class="w-48 h-24 flex justify-center items-center">
            <x-logo-svg class="w-48 h-48 object-cover object-center"></x-logo-svg>
        </div>
        <div>
            <span class="text-xs sm:text-sm md:text-md">Please fill in the necessary details</span>
        </div>
        <form method="POST" action="/register/staff" class="self-center ps-12 flex flex-col space-y-3">
            @csrf
            <div class="flex space-x-2 items-center justify-center">
                <x-form-field>
                    <x-form-label for="first_name">First Name</x-form-label>
                    <x-form-input type="text" name="first_name" id="first_name" value="{{old('first_name')}}"></x-form-input>
                    <x-form-error name="first_name"></x-form-error>
                </x-form-field>
                <x-form-field>
                    <x-form-label for="last_name">Last Name</x-form-label>
                    <x-form-input type="text" name="last_name" id="last_name" value="{{old('last_name')}}"></x-form-input>
                    <x-form-error name="last_name"></x-form-error>
                </x-form-field>
            </div>
            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <x-form-input type="email" name="email" id="email" class="w-5/6" value="{{old('email')}}"></x-form-input>
                <x-form-error name="email"></x-form-error>
            </x-form-field>
            <x-form-field>
                <x-form-label for="password">Password</x-form-label>
                <x-form-input type="password" name="password" id="password" class="w-5/6"></x-form-input>
                <x-form-error name="password"></x-form-error>
            </x-form-field>
            <x-form-field>
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input type="password" name="password_confirmation" id="password_confirmation" class="w-5/6"></x-form-input>
                <x-form-error name="password_confirmation"></x-form-error>
            </x-form-field>
            <x-form-input type="hidden" name="role" id="role" value="user"></x-form-input>
            <x-form-field class="pb-4">
                <x-secondary-btn formtype="button" type="submit" class="w-5/6">Register</x-secondary-btn>
            </x-form-field>
        </form>
    </x-modal>
@endsection

