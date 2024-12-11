@extends('layouts.app')

@section('title', 'Report Lost Item')

@section('background-color', 'bg-gray-100')

@section('content')
<section class="flex flex-col space-y-12 items-center justify-start flex-wrap">
        <div class="bg-teal-200 p-2 h-3/4 py-8 w-11/12 sm:w-9/12 rounded-lg my-8 flex drop-shadow-xl lg:w-1/2">
            <div class="flex-1 flex-shrink md:flex-shrink-0">
                <div class="block sm:ps-10 flex items-center justify-center my-4">
                    <h1 class="text-xl lg:text-3xl font-bold">Report Lost Item</h1>
                </div>
                <div class="mt-4 lg:mt-0">
                    <form action="/items/create/lost" method="POST" class="flex flex-col justify-center space-y-3 items-center sm:space-y-2">
                        @csrf
                        <x-form-label class="ms-14 sm:ms-20 sm:text-sm lg:ps-14">Item Name</x-form-label>
                        <x-form-input type="text" name="name" id="name" value="{{old('name')}}" required
                        class="text-xs sm:text-sm md:flex-shrink-0"></x-form-input>
                        <x-form-error name="name"></x-form-error>

                        <x-form-label class="ms-14 sm:ms-20 sm:text-sm lg:ps-14" >Location</x-form-label>
                        <x-form-input type="text" name="location" id="location" required
                        class="text-xs sm:text-sm md:flex-shrink-0"></x-form-input>
                        <x-form-error name="location"></x-form-error>

                        <x-form-label class="ms-14 sm:ms-20 sm:text-sm lg:ps-14" >Description</x-form-label>
                        <textarea class="border border-gray-300 rounded-md p-2 w-2/3" name="description" id="description"></textarea>
                        <x-form-error name="description"></x-form-error>

                        <div class="flex flex-wrap py-4">
                            <div class="flex flex-col items-center">
                                <x-form-label class="ps-16 lg:ps-0 text-md" >Date Lost</x-form-label>
                                <x-form-input type="date" name="date_lost_found" id="date_lost_found" required
                                class="ms-16 lg:ms-0 text-xs sm:text-sm md:flex-shrink-0 w-3/4"></x-form-input>
                                <x-form-error name="date_lost_found"></x-form-error>
                            </div>                        
                            <div class="flex flex-col items-center">
                                <x-form-label class="ps-16 lg:ps-0 text-md " >Image Upload</x-form-label>
                                <x-form-input type="file" name="imgurl" id="imgurl" required
                                class="ms-8 lg:ms-0 text-xs sm:text-sm md:flex-shrink-0"></x-form-input>
                                <x-form-error name="imgurl"></x-form-error>
                            </div>                        
                        </div>

                        <input type="hidden" name="status" value="lost">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <h3 class="font-semibold text-xl">Owner Details</h3>

                        <x-form-label class="ms-14 sm:ms-20 sm:text-sm lg:ps-14" >Student ID</x-form-label>
                        <x-form-input type="text" name="student_id" id="student_id" required
                        class="text-xs sm:text-sm md:flex-shrink-0"></x-form-input>
                        <x-form-error name="student_id"></x-form-error>

                        <x-form-label class="ms-14 sm:ms-20 sm:text-sm lg:ps-14" >Contact Number</x-form-label>
                        <x-form-input type="text" name="contact_number" id="contact_number" required
                        class="text-xs sm:text-sm md:flex-shrink-0"></x-form-input>
                        <x-form-error name="contact_number"></x-form-error>

                        <x-secondary-btn type="submit" class="self-end me-24">Save</x-secondary-btn>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection