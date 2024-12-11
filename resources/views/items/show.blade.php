@extends('layouts.app')

@section('title', 'Misplace')

@section('background-color', 'bg-gray-100')

@section('content')
<div class="flex flex-col md:flex-row p-8 bg-teal-100 my-4">
    <div class="flex-1 flex justify-center items-center">
        <img src="https://via.placeholder.com/150" alt="" class="w-5/6">
    </div>
    <div class="flex-1 flex-col space-y-4">
        <div class="flex items-center justify-center space-x-16">
            <h1 class="text-xl lg:text-3xl font-bold">{{$item->name}}</h1>
        </div>
        <div class="flex justify-between space-x-16">
            <h3 class="text-md lg:text-lg font-semibold">Description</h3>
            <p class="text-xs lg:text-sm">{{$item->description}}</p>
        </div>
        <div class="flex justify-between space-x-16">
            <h3 class="text-md lg:text-lg font-semibold">Status</h3>
            <p class="text-xs lg:text-sm uppercase">{{$item->status}}</p>
        </div>
        <div class="flex justify-between space-x-16">
            <h3 class="text-md lg:text-lg font-semibold">{{$item->status == 'found' ? 'Date Found' : 'Date Lost'}}</h3>
            <p class="text-xs lg:text-sm">{{$item->date_lost_found}}</p>
        </div>
        <div class="flex justify-between space-x-16">
            <h3 class="text-md lg:text-lg font-semibold">Location</h3>
            <p class="text-xs lg:text-sm">{{$item->location}}</p>
        </div>
        <h3 class="text-xl uppercase font-bold pt-8">Reporter Details</h3>
        <div class="flex justify-between space-x-16">
            <h3 class="text-md lg:text-lg font-semibold">Reported by</h3>
            <p class="text-xs lg:text-sm">{{$item->user->first_name . " " . $item->user->last_name}}</p>
        </div>
        <div class="flex justify-between space-x-16">
            <h3 class="text-md lg:text-lg font-semibold">Student ID</h3>
            <p class="text-xs lg:text-sm">{{$item->student_id}}</p>
        </div>
        <div class="flex justify-between space-x-16">
            <h3 class="text-md lg:text-lg font-semibold">Contact Number</h3>
            <p class="text-xs lg:text-sm">{{$item->contact_number}}</p>
        </div>
        @auth
        <div class="flex justify-end space-x-4">
            @can('edit-item', $item)
            <x-primary-btn formtype="a" href="/items/{{$item->id}}/edit" class="bg-teal-600 text-white">edit</x-primary-btn>
            @endcan
            @if(Auth::user()->role == 'staff')
            <x-primary-btn class="bg-red-600 text-white" form="delete-form">delete</x-primary-btn>
            <form action="/items/{{$item->id}}" method="POST" class="hidden" id="delete-form">
                @csrf
                @method('DELETE')

            </form>
            @endif
        </div>
        @endauth
    </div>
</div>

@endsection