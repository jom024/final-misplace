@extends('layouts.app')

@section('title', 'Misplace')

@section('background-color', 'bg-gray-100')

@section('content')

<div class="flex flex-col items-center justify-center py-4">
    <div class="flex justify-between w-full mb-4">
        <h1 class="text-xl font-semibold">Find what you lost here</h1>
        <x-primary-btn id="open-modal-btn"><img src="{{asset('resources/images/calendar-icon.svg')}}" class="w-6 h-6" alt=""></x-primary-btn>
    </div>
    <form action="{{url('search')}}" method="get" class="w-full">
        <div class="flex space-x-4 w-full">
            <x-form-input type="text" name="search" class="w-full" :value="old('search')"></x-form-input>
            <x-secondary-btn type="submit">Search</x-secondary-btn>
        </div>
    </form>
</div>

<section class="mt-4">
    <div class="flex flex-wrap justify-evenly">
        @foreach ($items as $item)
                <x-item-card 
                id="{{$item->id}}"
                item_name="{{$item->name}}"
                description="{{$item->description}}"
                status="{{$item->status}}"
                date="{{$item->date_lost_found}}"
                />
        @endforeach
    </div>
</section>
<div class="p-16">
    {{ $items->links() }}
</div>
<x-modal>
    <form action="{{url('search')}}" method="get" class="w-full">
        <x-form-label class="uppercase font-semibold ps-4 text-lg">DATE FILTERS</x-form-label>

        <div class="flex space-x-4 w-full items-center justify-center">
            <x-form-input type="date"></x-form-input>
            <span class="text-sm">to</span>
            <x-form-input type="date"></x-form-input>
        </div>
    </form>
</x-modal>

<script src="{{asset('resources/js/modal.js')}}"></script>

@endsection