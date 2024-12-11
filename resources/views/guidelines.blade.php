@extends('layouts.app')

@section('title', 'Misplace | Guidelines')

@section('background-color', 'bg-gray-100')
    
@section('content')
<div class="flex flex-col lg:flex-row">
    <div class="flex-grow-0 p-3 bg-gradient-to-r from-teal-600 via-teal-400 to-teal-200">
        <h1 class="text-2xl font-semibold lg:text-3xl">How To Use The System</h1>
        <p class="text-sm mt-2 lg:text-md">This guideline outlines the process for handling lost items, returning found items, and claiming lost belongings through the Lost and Found system. The steps are designed to ensure a smooth and documented procedure for everyone involved.</p>
    </div>
</div>
    <x-accordion class="mt-4"/>
@endsection