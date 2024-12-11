@extends('layouts.auth')

@section('title', 'Misplace | Login')

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
                <div class="mt-4 lg:mt-0">
                    <form action="/login" method="POST" class="flex flex-col justify-center space-y-3 items-center sm:space-y-2">
                        @csrf
                        <x-form-label class="ms-14 sm:ms-20 sm:text-sm ">Email</x-form-label>
                        <x-form-input type="email" name="email" id="email" value="{{old('email')}}" required
                        class="text-xs sm:text-sm md:flex-shrink-0"></x-form-input>
                        <x-form-error name="email"></x-form-error>

                        <x-form-label class="ms-14 sm:ms-20 sm:text-sm " >Password</x-form-label>
                        <x-form-input type="password" name="password" id="password" required
                        class="text-xs sm:text-sm md:flex-shrink-0"></x-form-input>
                        <x-form-error name="password"></x-form-error>

                        <x-secondary-btn type="submit" class="w-4/6 text-center text-xs sm:text-sm md:flex-shrink-0">Log in</x-primary-btn>
                        <div class="ms-0 flex-1 flex items-center justify-center">
                            <span class="text-bg-400 text-xs mx-4 flex-1">or</span>
                        </div>
                        <x-primary-btn class="text-xs text-nowrap w-4/6 bg-teal-100 sm:text-sm md:flex-shrink-0 flex items-center justify-center gap-2">
                            <img src="{{asset('resources/images/google-icon.svg')}}" alt="google-icon" class="w-4 h-4">
                            Continue with Google</x-primary-btn>

                        <div>
                            <a href="/"><span
                            class="text-xs font-semibold hover:font-bold underline text-gray-700 ">Don't have an account yet? Register.</span></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex-1 hidden lg:block py-10 pe-10">
                <img src="{{asset('resources/images/bunzel.jpg')}}" alt="bunzel bldg"
                class="w-full object-cover object-center h-full rounded-r-lg">
            </div>
        </div>
    </section>
@endsection