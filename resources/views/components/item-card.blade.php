@props([
    'id' => '#',
    'item_name' => 'N/A', 
    'description' => 'N/A', 
    'status' => 'N/A', 
    'date' => '0000/00/00', 
    'imgurl'=>'https://via.placeholder.com/150',
    'reporter' => 'N/A'
])

<div class="flex flex-col w-1/2 h-1/3 my-4 space-y-2 lg:w-1/3 h-1/2 justify-center items-center">

    <div class="flex flex-col w-3/4 h-1/2">
        <a href="/items/{{$id}}" class="">
            <img src="{{$imgurl}}" alt="" class="object-cover w-full">
        </a>
    </div>
    <div class="flex flex-col w-3/4 h-1/2 space-y-2">
        <h2 class="text-md self-center">{{$item_name}}</h2>
        <p class="text-xs truncate">{{$description}}</p>
        <div class="flex justify-between">
            <x-tag>{{$status}}</x-tag>
            <x-tag>{{$date}}</x-tag>
        </div>
    </div>
</a>

</div>